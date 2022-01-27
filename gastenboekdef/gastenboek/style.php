<?php
header('Content-Type:text/css;');
?> 

*,
*::before,
*::after{
    box-sizing: border-box;
    
}

.container{
    background-image: url(background.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    display: flex;
    background-color: gray;
    justify-content: center;
    height: 100%;
    align-items: center;
}

.innercontainer{
    background-color: rgb(255, 255, 255, 0.7);
    padding: 10px;
    width: 400px;
    margin-top: 300px
}

.output{
    display: flex;
    flex-direction: row;
    margin-bottom: 10px;
}

