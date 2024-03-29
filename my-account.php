<body class="woocommerce-account logged-in"> 
  <div class="master">
    <div class="master-inner">
      <div class="woocommerce">
        <nav class="woocommerce-MyAccount-navigation">
          <ul>
            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard is-active">
              <a href="/my-account/">Dashboard</a>
            </li>
            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
              <a href="/my-account/orders/">Orders</a>
            </li>
            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--downloads">
              <a href="/my-account/downloads/">Downloads</a>
            </li>
            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">
              <a href="/my-account/edit-address/">Addresses</a>
            </li>
            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account">
              <a href="/my-account/edit-account/">Account Details</a>
            </li>
            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
              <a href="/my-account/customer-logout/">Logout</a>
            </li>
          </ul>
        </nav>
        <div class="woocommerce-MyAccount-content">
          <p>
            Hello <strong>anluu</strong>
          </p>
          <p>
            From your account dashboard you can view your <a href="/my-account/orders/">recent
              orders</a>, manage your <a href="/my-account/edit-address/">shipping and
              billing addresses</a> and <a href="/my-account/edit-account/">edit your
              password and account details</a>.
          </p>

          <div>
            <form class="woocommerce-EditAccountForm edit-account" action="" method="post">
            <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
            <label for="account_first_name">First name&nbsp;<span class="required">*</span></label>
            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_first_name" id="account_first_name" autocomplete="given-name" value="">
            </p>
            <p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
            <label for="account_last_name">Last name&nbsp;<span class="required">*</span></label>
            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" autocomplete="family-name" value="">
            </p>
            <div class="clear"></div>
            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
            <label for="account_display_name">Display name&nbsp;<span class="required">*</span></label>
            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_display_name" id="account_display_name" value="luubinhan1989"> <span><em>This will be how your name will be displayed in the account section and in reviews</em></span>
            </p>
            <div class="clear"></div>
            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
            <label for="account_email">Email address&nbsp;<span class="required">*</span></label>
            <input type="email" class="woocommerce-Input woocommerce-Input--email input-text" name="account_email" id="account_email" autocomplete="email" value="luubinhan1989@gmail.com">
            </p>
            <fieldset>
            <legend>Password change</legend>
            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
            <label for="password_current">Current password (leave blank to leave unchanged)</label>
            <input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_current" id="password_current" autocomplete="off">
            </p>
            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
            <label for="password_1">New password (leave blank to leave unchanged)</label>
            <input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_1" id="password_1" autocomplete="off">
            </p>
            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
            <label for="password_2">Confirm new password</label>
            <input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_2" id="password_2" autocomplete="off" >
            </p>
            </fieldset>
            <div class="clear"></div>
            <p>
            <button type="submit" class="woocommerce-Button button" name="save_account_details" value="Save changes">Save changes</button>
            <input type="hidden" name="action" value="save_account_details">
            </p>
            </form>
            </div>
        </div><!-- woocommerce-MyAccount-content -->
      </div><!-- woocommerce -->
    </div><!-- master-inner -->
  </div><!-- master -->
</body>
  
  