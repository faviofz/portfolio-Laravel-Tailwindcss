<?php

function setActive($route)
{
    return request()->routeIs($route) ? "bg-sky-500 text-white md:text-sky-500" : " ";
}
