<?php
namespace T00niebox\Server;

/**
 * Server class managing the whole server process
 */
class Server
{
    /**
     * @var string $handler
     */
    private $handler = '';

    /**
     * @var array $vars
     */
    private $vars = [];

    /**
     * @var \Sabre\HTTP\Response $response
     */
    private $response = null;

    /**
     * Initializing server
     *
     * @param string $handler
     * @param array $vars
     * @param \Sabre\HTTP\Response $response
     */
    public function __construct($handler, array $vars, \Sabre\HTTP\Response $response)
    {
        $this->handler = $handler;
        $this->vars = $vars;
        $this->response = $response;

        $this->response->setHeader('Content-type', 'application/json');
    }

    /**
     * Dispatch to server method depending on handler
     *
     * @return void
     */
    public function dispatch()
    {
        if (method_exists(__CLASS__, $this->handler)) {
            // Call handler
            $result = $this->{$this->handler}();

            // If handler returns a http response override current response object
            if ($result instanceof \Sabre\HTTP\ResponseInterface) {
                $this->response = $result;
            } else {
                $code = 200;
                $this->response->setStatus($code);
                $this->response->setBody(json_encode(array_merge(['code' => $code, 'message' => 'OK'], ['result' => $result])));
            }
        }
    }

    /**
     * Get eventually modified response object
     *
     * @return \Sabre\HTTP\Response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Get playlist depeding on the transmitted (rfid) id.
     *
     * @return [type] [description]
     */
    protected function getPlaylist()
    {
        return [];
    }
}
