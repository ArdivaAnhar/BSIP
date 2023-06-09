<?php

function renderPasswordToggle()
{
    echo '
    <div class="input-group mr-3 ml-3 mb-3">
        <input type="password" class="pt-4 pb-4 form-control form-control-user" id="password" name="password" placeholder="Password" required>
        <div class="input-group-append" style="padding-right: 35px;">
            <span class="input-group-text btn btn-secondary" id="togglePassword" style="cursor: pointer;">
                <i class="fa fa-eye-slash" aria-hidden="true"></i>
            </span>
        </div>
    </div>
    ';
}

?>