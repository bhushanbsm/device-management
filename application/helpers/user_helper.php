<?php
function user_logged_in()
{
	return isset($_SESSION['loggedin']) ? 1 : 0;
}
