<div id="loader">
    <style type="text/css">
        body{
            overflow-y: hidden;                    
        }
        #loader{
            background: #161616 url('themes/img/loader.gif') top left repeat;
            padding-top: 24em;
            margin-top: -5%;
            height: 40em;
        }
        #ball {
            background-color: rgba(0,0,0,0);
            border:5px solid rgba(0,183,229,0.9);
            opacity:.9;
            border-top:5px solid rgba(0,0,0,0);
            border-left:5px solid rgba(0,0,0,0);
            border-radius:50px;
            box-shadow: 0 0 35px #2187e7;
            width:50px;
            height:50px;
            margin:0 auto;
            -moz-animation:spin .5s infinite linear;
            -webkit-animation:spin .5s infinite linear;
        }
        #ball1 {
            background-color: rgba(0,0,0,0);
            border:5px solid rgba(0,183,229,0.9);
            opacity:.9;
            border-top:5px solid rgba(0,0,0,0);
            border-left:5px solid rgba(0,0,0,0);
            border-radius:50px;
            box-shadow: 0 0 15px #2187e7; 
            width:30px;
            height:30px;
            margin:0 auto;
            position:relative;
            top:-50px;
            -moz-animation:spinoff .5s infinite linear;
            -webkit-animation:spinoff .5s infinite linear;
        }
        @-moz-keyframes spin {
            0% { -moz-transform:rotate(0deg); }
            100% { -moz-transform:rotate(360deg); }
        }
        @-moz-keyframes spinoff {
            0% { -moz-transform:rotate(0deg); }
            100% { -moz-transform:rotate(-360deg); }
        }
        @-webkit-keyframes spin {
            0% { -webkit-transform:rotate(0deg); }
            100% { -webkit-transform:rotate(360deg); }
        }
        @-webkit-keyframes spinoff {
            0% { -webkit-transform:rotate(0deg); }
            100% { -webkit-transform:rotate(-360deg); }
        }
    </style>
    <div id="ball"></div>
    <div id="ball1"></div>
    <label class="offset5" style="padding-left: 6%;">Cargando...</label>
</div>