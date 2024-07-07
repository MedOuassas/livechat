'use strict';

class Socket {

    constructor(socket)
    {
        this.io = socket
    }

    socketConnection()
    {
        this.io.on('connection', (socket) => {
            console.log('A new visitor here as session => ', socket.id);

            this.socketDisconnect(socket);// Disconnect User

        });
    }

    socketDisconnect(socket)
    {
        socket.on('disconnect', (data) => {

        });
    }
}