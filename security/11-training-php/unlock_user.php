<?php
session_start();
if (isset($_SESSION['editing_user_id'])) {
    unset($_SESSION['editing_user_id']);
}
?>