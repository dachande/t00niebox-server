# T00niebox Server

Server component for my custom reimplementation of the [Toniebox](https://tonies.de/).

## Why?

I like the concept of the Toniebox using little tokens (called Tonies&reg;) that contain small rfid chips. Each one of these Tonies stand for a different radio play. The magic happens as soon as you place one of these Tonies onto your Toniebox&reg; which then start to play the radio play that is attached to that specific Tonie.

Unfortunately in my opinion the Toniebox and the Tonies are way too expensive hence I have started my own implementation of the Toniebox.

## How?

This concept is still a WIP so it is very likely to change.

The t00niebox consists of two components. A server (this repository) and a client (https://github.com/dachande/t00niebox-client).

### Server

The server holds the whole music archive (and/or radio play archive) along with a small SQLite database that stores mappings (called cards) each containing a rfid-uuid and a list of files and/or folders attached to that rfid-uuid. It interacts with the client by listening for simple client requests containing nothing more than a rfid-uuid.

When the server receives a request from the client it checks if a card can be found for the specified rfid-uuid and returns the card as a json object back to the client.

### Client

The client side is a bit more complex and will consist of multiple components:

* MPD server
* A library to interact with a rfid reader
* Client logic that interacts with the t00niebox server and the MPD server.

When the client discovers a rfid transponder it does a couple of things:

* It checks if a network connection is present. If that's the case it transmits the recognized rfid-uuid to the server. If no network connection is present it tries to find some kind of local copy of a playlist for that rfid-uuid and will play that playlist through MPD if available.
* When the server responds with a card the client starts downloading (synchronizing) the files/folders attached to that card from the server using rsync.
* After downloading the files the client begins to play the playlist through the MPD server.

### Advantages of this concept

Like the Toniebox my t00niebox is downloading the music from the server before starting to play anything. That way the client is also capable of playing the music already downloaded when no network connection is available.

If card contents on the server are updated or music files change (new/better encoding for instance) the client will synchronize only new/changed files using rsync hence network traffic is minimized.

## Any ideas?

Great. Just send me an email at [d.schultheis@kabel-salat.net](d.schultheis@kabel-salat.net) or add a pull request.
