'use strict';

const express   = require('express');
const http      = require('http');
const socket    = require('socket.io');
const socketServer = require('./socket');

class Server {

    constructor ()
    {
        this.port = 6000;
        this.host = 'localhost';

        this.app = express();
        this.http = http.Server(this.app);// Node JS Server
        this.socket = socket(this.http);// Run a socket io Module
        
    }

    runServer ()
    {
        new socketServer(this.socket).socketConnection();

        /* Listening a Node JS Server */
        this.http.listen(this.port, this.host, () => {
            console.log(`the server is runing at http://${this.host}:${this.port}`);
        });
    }

}

const app = new Server();

app.runServer();