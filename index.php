<?php

if (new DateTime() > new DateTime("2020-11-27 16:00:00")) {
    include("game.html");
} else {
    include("waiting.html");
}

?>