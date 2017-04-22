# T00niebox Server

This is the server component of t00niebox, my custom reimplementation of the [Toniebox](https://tonies.de/).

## Why?

I like the concept of the Toniebox using little figures (called Tonies&reg;) made out of some rubber plastic material containing small rfid chips. The magic happens when you place one of these figures onto your Toniebox which then start to play a radioplay that is attached with that figure.

Unfortunately in my opinion the Toniebox and the Tonies&reg; are way too expensive. Therefore I have started my own implementation of the Toniebox.

## How?

This concept is still a WIP so it is very likely to change.

The t00niebox consists of two components. A server (this repository) and a client (not yet available).

### Server

The server contains the whole music (and/or radioplay) archive and a bunch of playlists where each playlist is being mapped to a specific rfid uuid managed in a small sqlite database. It interacts with the client by listening for simple client requests containing nothing more than a rfid uuid.

When the server receives a request from the client it checks if the rfid uuid is mapped to a playlist and sends this playlist back to the client. That's all.

### Client

The client side is a bit more complex. It will consist of multiple components:

* MPD server
* Some library to interact with a rfid reader
* Client logic that interacts with the t00niebox server and the MPD server.

When the client discovers a rfid transponder it does a couple of things:

* It checks if a network connection is present. If that's the case it transmits the recognized rfid uuid to the server. If no network connection is present it tries to find some kind of local copy of the rfid uuid to playlist mapping and if available it will play the mapped playlist through MPD.
* When the server responds with a playlist the client starts to download the containing music from the server using rsync.
* After the download the client begins to play the playlist using MPD.

### Advantages of this concept

Like the Toniebox my t00niebox is downloading the music from the server before starting to play anything. That way the client is also capable of playing the music already downloaded when no network connection is available.

If playlists on the server are updated or music files change (new/better encoding for instance) using rsync the client will synchronize only new/changed files. Therefore network traffic is minimized.

If you are using the t00niebox for your kids you are in full control what your kids can listen to. If you like to (temporarily) block content for your kids you can do so on the server side and the client will act accordingly not playing content that has been blocked on the server.

## Any ideas?

Great. Just send me an email at [d.schultheis@kabel-salat.net](d.schultheis@kabel-salat.net) or add a pull request.
