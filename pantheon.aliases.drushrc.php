<?php
  /**
   * Pantheon drush alias file, to be placed in your ~/.drush directory or the aliases
   * directory of your local Drush home. Once it's in place, clear drush cache:
   *
   * drush cc drush
   *
   * To see all your available aliases:
   *
   * drush sa
   *
   * See http://helpdesk.getpantheon.com/customer/portal/articles/400388 for details.
   */

  $aliases['igcommerce.ankur-dev'] = array(
    'uri' => 'ankur-dev-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:0bbe07ec0c3f496a970cef9ef3807585@dbserver.ankur-dev.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in:09930/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.ankur-dev.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'ankur-dev.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.erik-test'] = array(
    'uri' => 'erik-test-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:8396d8caf5be45a7bac860f24293202b@dbserver.erik-test.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in:20708/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.erik-test.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'erik-test.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.aj-behat'] = array(
    'uri' => 'aj-behat-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:a42bb07cb6f248dd8f9fa62c72ffbff7@dbserver.aj-behat.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in:00559/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.aj-behat.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'aj-behat.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.testreplace'] = array(
    'uri' => 'testreplace-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:5ac7f85e9c4540c9925e0bac03b880e0@dbserver.testreplace.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in:05769/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.testreplace.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'testreplace.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.solrpublish'] = array(
    'uri' => 'solrpublish-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:cf6ba949800449fd950eb2c8dbb287e0@dbserver.solrpublish.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in:28423/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.solrpublish.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'solrpublish.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.dev'] = array(
    'uri' => 'dev-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:4ba54b78264e4704af4e349ab3cf0e03@dbserver.dev.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in:05500/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'dev.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.ajay-ig'] = array(
    'uri' => 'ajay-ig-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:709e0b745467446990726b263530a4b9@dbserver.ajay-ig.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in:04725/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.ajay-ig.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'ajay-ig.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.test'] = array(
    'uri' => 'test-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:b53f290955ec4eef9de08ece0d4c59ed@dbserver.test.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in:00900/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'test.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.anisha'] = array(
    'uri' => 'anisha-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:a998fbfb5a0049e09ff80e83be3f5960@dbserver.anisha.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in:05873/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.anisha.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'anisha.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.fw0783'] = array(
    'uri' => 'fw0783-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:e0b89c2a57394f6b97b03e095e723053@dbserver.fw0783.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in:25860/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.fw0783.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'fw0783.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.devbkp06mar'] = array(
    'uri' => 'devbkp06mar-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:0cc92672cd6243279842e8b58bcc8387@dbserver.devbkp06mar.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in:09035/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.devbkp06mar.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'devbkp06mar.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.toc'] = array(
    'uri' => 'toc-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:a09645befc534e23b260323650c9a667@dbserver.toc.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in:22987/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.toc.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'toc.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.theme'] = array(
    'uri' => 'theme-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:0255e7ec534d40ceb39442daf6006e7d@dbserver.theme.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in:02955/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.theme.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'theme.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.pomona'] = array(
    'uri' => 'pomona-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:060240402ba8465d955865f557c5c040@dbserver.pomona.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in:07892/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.pomona.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'pomona.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.libbypromo'] = array(
    'uri' => 'libbypromo-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:400bade9dd804ca7aa898e04ddef2585@dbserver.libbypromo.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in:09733/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.libbypromo.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'libbypromo.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.jon-testing'] = array(
    'uri' => 'jon-testing-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:23e3f66b0d734500b6fc5503ea0af3d9@dbserver.jon-testing.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in:00058/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.jon-testing.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'jon-testing.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.jon-webcard'] = array(
    'uri' => 'jon-webcard-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:86e7867200994964a4890360f8084ea6@dbserver.jon-webcard.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in:20090/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.jon-webcard.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'jon-webcard.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.fw0766'] = array(
    'uri' => 'fw0766-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:c5ffc5e2737e455ca62bebe72e02c030@dbserver.fw0766.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in:25972/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.fw0766.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'fw0766.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.syncmanuals'] = array(
    'uri' => 'syncmanuals-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:ba66a59704224d29b58b224e93009629@dbserver.syncmanuals.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in:20760/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.syncmanuals.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'syncmanuals.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.jon-sitemap'] = array(
    'uri' => 'jon-sitemap-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:e5ea54929dd744d4ae4bb00c272b2048@dbserver.jon-sitemap.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in:02903/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.jon-sitemap.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'jon-sitemap.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.live'] = array(
    'uri' => 'live-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:ef73aa00f68d4d23ab7b0fa7e6f6c087@dbserver.live.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in:03895/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'live.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['igcommerce.fw0790'] = array(
    'uri' => 'fw0790-igcommerce.pantheonsite.io',
    'db-url' => 'mysql://pantheon:7b93e03a286c405bbd6cbe96329a8bcf@dbserver.fw0790.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in:20042/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.fw0790.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6.drush.in',
    'remote-user' => 'fw0790.d6b80a3c-0bf9-40b2-9fe3-8d8475a52bb6',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fww.live'] = array(
    'uri' => 'inside.fluke.com',
    'db-url' => 'mysql://pantheon:5976372b6590462099852b08d2b92424@dbserver.live.bc6c8abf-838d-43db-ab3d-034f538fee64.drush.in:02498/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.bc6c8abf-838d-43db-ab3d-034f538fee64.drush.in',
    'remote-user' => 'live.bc6c8abf-838d-43db-ab3d-034f538fee64',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fww.test'] = array(
    'uri' => 'test-fww.pantheonsite.io',
    'db-url' => 'mysql://pantheon:4d6b633ad00744e98a903655bf6c4d02@dbserver.test.bc6c8abf-838d-43db-ab3d-034f538fee64.drush.in:00570/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.bc6c8abf-838d-43db-ab3d-034f538fee64.drush.in',
    'remote-user' => 'test.bc6c8abf-838d-43db-ab3d-034f538fee64',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fww.dev'] = array(
    'uri' => 'dev-fww.pantheonsite.io',
    'db-url' => 'mysql://pantheon:38bdccc33cf44384aef36978269c9eff@dbserver.dev.bc6c8abf-838d-43db-ab3d-034f538fee64.drush.in:00659/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.bc6c8abf-838d-43db-ab3d-034f538fee64.drush.in',
    'remote-user' => 'dev.bc6c8abf-838d-43db-ab3d-034f538fee64',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fww.login'] = array(
    'uri' => 'login-fww.pantheonsite.io',
    'db-url' => 'mysql://pantheon:bff2c5333c264fdebede022da9bc55f3@dbserver.login.bc6c8abf-838d-43db-ab3d-034f538fee64.drush.in:09856/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.login.bc6c8abf-838d-43db-ab3d-034f538fee64.drush.in',
    'remote-user' => 'login.bc6c8abf-838d-43db-ab3d-034f538fee64',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['beha.anshul-live'] = array(
    'uri' => 'anshul-live-beha.pantheonsite.io',
    'db-url' => 'mysql://pantheon:7239b4793eff4dc383002e062536d260@dbserver.anshul-live.56977d0d-276a-4965-b3f4-e8b65ce33e73.drush.in:26946/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.anshul-live.56977d0d-276a-4965-b3f4-e8b65ce33e73.drush.in',
    'remote-user' => 'anshul-live.56977d0d-276a-4965-b3f4-e8b65ce33e73',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['beha.dev'] = array(
    'uri' => 'dev-beha.pantheon.io',
    'db-url' => 'mysql://pantheon:afbb0d60a30e4d06b666e303487af6f6@dbserver.dev.56977d0d-276a-4965-b3f4-e8b65ce33e73.drush.in:03708/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.56977d0d-276a-4965-b3f4-e8b65ce33e73.drush.in',
    'remote-user' => 'dev.56977d0d-276a-4965-b3f4-e8b65ce33e73',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['beha.php7'] = array(
    'uri' => 'php7-beha.pantheonsite.io',
    'db-url' => 'mysql://pantheon:498e4e93f8ac40ecab254dd08592b09e@dbserver.php7.56977d0d-276a-4965-b3f4-e8b65ce33e73.drush.in:06977/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.php7.56977d0d-276a-4965-b3f4-e8b65ce33e73.drush.in',
    'remote-user' => 'php7.56977d0d-276a-4965-b3f4-e8b65ce33e73',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['beha.pantheoncse'] = array(
    'uri' => 'pantheoncse-beha.pantheonsite.io',
    'db-url' => 'mysql://pantheon:d7d75809029e4dc3b05cf505623c648c@dbserver.pantheoncse.56977d0d-276a-4965-b3f4-e8b65ce33e73.drush.in:20079/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.pantheoncse.56977d0d-276a-4965-b3f4-e8b65ce33e73.drush.in',
    'remote-user' => 'pantheoncse.56977d0d-276a-4965-b3f4-e8b65ce33e73',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['beha.fixproduct'] = array(
    'uri' => 'fixproduct-beha.pantheonsite.io',
    'db-url' => 'mysql://pantheon:8f75bd65b55f4936b2070bee68c9985d@dbserver.fixproduct.56977d0d-276a-4965-b3f4-e8b65ce33e73.drush.in:22026/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.fixproduct.56977d0d-276a-4965-b3f4-e8b65ce33e73.drush.in',
    'remote-user' => 'fixproduct.56977d0d-276a-4965-b3f4-e8b65ce33e73',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['beha.test'] = array(
    'uri' => 'test-beha.pantheonsite.io',
    'db-url' => 'mysql://pantheon:abbb9bffdf8e4f06acbe20d4f37d5a4e@dbserver.test.56977d0d-276a-4965-b3f4-e8b65ce33e73.drush.in:02636/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.56977d0d-276a-4965-b3f4-e8b65ce33e73.drush.in',
    'remote-user' => 'test.56977d0d-276a-4965-b3f4-e8b65ce33e73',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['beha.live'] = array(
    'uri' => 'beha-amprobe.de',
    'db-url' => 'mysql://pantheon:80b969d85d0d4ba6805a0024bf408ef2@dbserver.live.56977d0d-276a-4965-b3f4-e8b65ce33e73.drush.in:00723/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.56977d0d-276a-4965-b3f4-e8b65ce33e73.drush.in',
    'remote-user' => 'live.56977d0d-276a-4965-b3f4-e8b65ce33e73',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['beha.toddstest'] = array(
    'uri' => 'toddstest-beha.pantheonsite.io',
    'db-url' => 'mysql://pantheon:8b3e0b2c5b7843bbbc4fd0b02090b06d@dbserver.toddstest.56977d0d-276a-4965-b3f4-e8b65ce33e73.drush.in:20440/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.toddstest.56977d0d-276a-4965-b3f4-e8b65ce33e73.drush.in',
    'remote-user' => 'toddstest.56977d0d-276a-4965-b3f4-e8b65ce33e73',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.solrpublish'] = array(
    'uri' => 'solrpublish-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:3fed60c7b50f4fc8866d00bc44b0207d@dbserver.solrpublish.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in:08950/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.solrpublish.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in',
    'remote-user' => 'solrpublish.ccf660c6-40a4-4609-a04e-3c624b0322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.testreplace'] = array(
    'uri' => 'testreplace-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:0c9ae5058ff44ff0a40ea33c829e8e08@dbserver.testreplace.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in:03678/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.testreplace.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in',
    'remote-user' => 'testreplace.ccf660c6-40a4-4609-a04e-3c624b0322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.fnet'] = array(
    'uri' => 'fnet-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:55d35a3d04f946c08b368e0665b0a752@dbserver.fnet.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in:22463/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.fnet.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in',
    'remote-user' => 'fnet.ccf660c6-40a4-4609-a04e-3c624b0322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.ryan'] = array(
    'uri' => 'ryan-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:09ff0ee50aa44a57b02c93a09f825d49@dbserver.ryan.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in:00300/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.ryan.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in',
    'remote-user' => 'ryan.ccf660c6-40a4-4609-a04e-3c624b0322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.erin'] = array(
    'uri' => 'erin-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:f07ffa8e06da408dac0797f0ed78ec8a@dbserver.erin.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in:03709/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.erin.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in',
    'remote-user' => 'erin.ccf660c6-40a4-4609-a04e-3c624b0322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.anisha'] = array(
    'uri' => 'anisha-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:eb73d3d036d443d59cea5c3332d3d80e@dbserver.anisha.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in:08509/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.anisha.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in',
    'remote-user' => 'anisha.ccf660c6-40a4-4609-a04e-3c624b0322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.lasbrey-s3'] = array(
    'uri' => 'lasbrey-s3-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:0ab60a99683b436a8ff9225376f88466@dbserver.lasbrey-s3.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in:02987/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.lasbrey-s3.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in',
    'remote-user' => 'lasbrey-s3.ccf660c6-40a4-4609-a04e-3c624b0322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.ankur'] = array(
    'uri' => 'ankur-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:48f05662ce444f2a99a526c47c053437@dbserver.ankur.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in:09584/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.ankur.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in',
    'remote-user' => 'ankur.ccf660c6-40a4-4609-a04e-3c624b0322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.jon-testing'] = array(
    'uri' => 'jon-testing-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:d9fb275d88964335bd68caf0f96f483b@dbserver.jon-testing.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in:27479/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.jon-testing.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in',
    'remote-user' => 'jon-testing.ccf660c6-40a4-4609-a04e-3c624b0322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.reporting'] = array(
    'uri' => 'reporting-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:5d02c528c90446d0b6a024b946f527e9@dbserver.reporting.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in:05695/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.reporting.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in',
    'remote-user' => 'reporting.ccf660c6-40a4-4609-a04e-3c624b0322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.ajay'] = array(
    'uri' => 'ajay-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:e039c0409adf405098054b0c5ea29a6e@dbserver.ajay.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in:26940/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.ajay.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in',
    'remote-user' => 'ajay.ccf660c6-40a4-4609-a04e-3c624b0322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.fw0790'] = array(
    'uri' => 'fw0790-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:68900567720e4fd09839b96d8de59aad@dbserver.fw0790.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in:20909/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.fw0790.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in',
    'remote-user' => 'fw0790.ccf660c6-40a4-4609-a04e-3c624b0322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.jon-sitemap'] = array(
    'uri' => 'jon-sitemap-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:5405885aba0b4cfe9edc8a3b24600257@dbserver.jon-sitemap.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in:25029/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.jon-sitemap.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in',
    'remote-user' => 'jon-sitemap.ccf660c6-40a4-4609-a04e-3c624b0322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.daniel'] = array(
    'uri' => 'daniel-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:3902625f0d994090925020ba66663e20@dbserver.daniel.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in:05044/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.daniel.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in',
    'remote-user' => 'daniel.ccf660c6-40a4-4609-a04e-3c624b0322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.dev'] = array(
    'uri' => 'dev-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:004edc9e0ac948e986c9a0904b42434e@dbserver.dev.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in:05799/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in',
    'remote-user' => 'dev.ccf660c6-40a4-4609-a04e-3c624b0322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.anshul-live'] = array(
    'uri' => 'anshul-live-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:4b006463c4a04202b64822d45cb99d35@dbserver.anshul-live.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in:08962/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.anshul-live.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in',
    'remote-user' => 'anshul-live.ccf660c6-40a4-4609-a04e-3c624b0322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.syncmanuals'] = array(
    'uri' => 'syncmanuals-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:a9cf7995bb0442959e2b3805267c5d48@dbserver.syncmanuals.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in:22307/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.syncmanuals.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in',
    'remote-user' => 'syncmanuals.ccf660c6-40a4-4609-a04e-3c624b0322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.live'] = array(
    'uri' => 'live-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:ff4f7da900f94a3295bf48add92f55eb@dbserver.live.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in:07687/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in',
    'remote-user' => 'live.ccf660c6-40a4-4609-a04e-3c624b0322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.aj-product'] = array(
    'uri' => 'aj-product-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:c723fbd6b6da49afa76fe9a9f0725bb0@dbserver.aj-product.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in:09254/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.aj-product.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in',
    'remote-user' => 'aj-product.ccf660c6-40a4-4609-a04e-3c624b0322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.test'] = array(
    'uri' => 'test-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:77b87d45994c47fa897dcf2360ad7ec3@dbserver.test.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in:06586/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in',
    'remote-user' => 'test.ccf660c6-40a4-4609-a04e-3c624b0322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-ecm.devbkp06mar'] = array(
    'uri' => 'devbkp06mar-fluke-ecm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:68578c0500704ff38c2af3504a04b806@dbserver.devbkp06mar.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in:00706/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.devbkp06mar.ccf660c6-40a4-4609-a04e-3c624b0322e4.drush.in',
    'remote-user' => 'devbkp06mar.ccf660c6-40a4-4609-a04e-3c624b0322e4',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-dam.s3'] = array(
    'uri' => 's3-fluke-dam.pantheonsite.io',
    'db-url' => 'mysql://pantheon:5eb80d5c00b546d9a945f58b04654604@dbserver.s3.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in:08252/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.s3.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in',
    'remote-user' => 's3.a47722c3-6fe9-42dd-8e39-37d339e4a5ae',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-dam.testreplace'] = array(
    'uri' => 'testreplace-fluke-dam.pantheonsite.io',
    'db-url' => 'mysql://pantheon:45e2983dadfe49bab525a76f5db5676e@dbserver.testreplace.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in:26330/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.testreplace.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in',
    'remote-user' => 'testreplace.a47722c3-6fe9-42dd-8e39-37d339e4a5ae',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-dam.solrpublish'] = array(
    'uri' => 'solrpublish-fluke-dam.pantheonsite.io',
    'db-url' => 'mysql://pantheon:6bdd773f90304e46a5202c330703f685@dbserver.solrpublish.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in:00568/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.solrpublish.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in',
    'remote-user' => 'solrpublish.a47722c3-6fe9-42dd-8e39-37d339e4a5ae',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-dam.syncmanuals'] = array(
    'uri' => 'syncmanuals-fluke-dam.pantheonsite.io',
    'db-url' => 'mysql://pantheon:ad0fd0eef03b4a498bbd7a4da93d42d0@dbserver.syncmanuals.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in:20646/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.syncmanuals.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in',
    'remote-user' => 'syncmanuals.a47722c3-6fe9-42dd-8e39-37d339e4a5ae',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-dam.ajay-dam'] = array(
    'uri' => 'ajay-dam-fluke-dam.pantheonsite.io',
    'db-url' => 'mysql://pantheon:8dbc0005ab734c6fb5ea43e6a3fd0c0b@dbserver.ajay-dam.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in:02463/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.ajay-dam.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in',
    'remote-user' => 'ajay-dam.a47722c3-6fe9-42dd-8e39-37d339e4a5ae',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-dam.ankur'] = array(
    'uri' => 'ankur-fluke-dam.pantheonsite.io',
    'db-url' => 'mysql://pantheon:fa0c4edca974428ca2d3272e424a2e24@dbserver.ankur.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in:25200/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.ankur.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in',
    'remote-user' => 'ankur.a47722c3-6fe9-42dd-8e39-37d339e4a5ae',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-dam.test'] = array(
    'uri' => 'test-fluke-dam.pantheonsite.io',
    'db-url' => 'mysql://pantheon:da6db73f69454a00b577e7268bcc80bb@dbserver.test.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in:00554/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in',
    'remote-user' => 'test.a47722c3-6fe9-42dd-8e39-37d339e4a5ae',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-dam.eod'] = array(
    'uri' => 'eod-fluke-dam.pantheonsite.io',
    'db-url' => 'mysql://pantheon:2e7dfe579cae4ff6ace2b9f844a797e7@dbserver.eod.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in:06208/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.eod.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in',
    'remote-user' => 'eod.a47722c3-6fe9-42dd-8e39-37d339e4a5ae',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-dam.lasbrey-s3'] = array(
    'uri' => 'lasbrey-s3-fluke-dam.pantheonsite.io',
    'db-url' => 'mysql://pantheon:09b07ecadd6d4c5d8fc03969df68d24e@dbserver.lasbrey-s3.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in:02803/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.lasbrey-s3.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in',
    'remote-user' => 'lasbrey-s3.a47722c3-6fe9-42dd-8e39-37d339e4a5ae',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-dam.jon-testing'] = array(
    'uri' => 'jon-testing-fluke-dam.pantheonsite.io',
    'db-url' => 'mysql://pantheon:49af9454ae0b4339a0938bbb5592dbda@dbserver.jon-testing.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in:22065/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.jon-testing.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in',
    'remote-user' => 'jon-testing.a47722c3-6fe9-42dd-8e39-37d339e4a5ae',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-dam.live'] = array(
    'uri' => 'data.fluke.com',
    'db-url' => 'mysql://pantheon:8a7d6c29e65f4496ab5ab004c3b9dee6@dbserver.live.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in:06753/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in',
    'remote-user' => 'live.a47722c3-6fe9-42dd-8e39-37d339e4a5ae',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-dam.anshul-dev'] = array(
    'uri' => 'anshul-dev-fluke-dam.pantheonsite.io',
    'db-url' => 'mysql://pantheon:e7958e532df44c52a2e0d653bf9dd8a2@dbserver.anshul-dev.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in:04622/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.anshul-dev.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in',
    'remote-user' => 'anshul-dev.a47722c3-6fe9-42dd-8e39-37d339e4a5ae',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['fluke-dam.dev'] = array(
    'uri' => 'dev-fluke-dam.pantheonsite.io',
    'db-url' => 'mysql://pantheon:ce853a297293468f9d3fce8f4ba4708c@dbserver.dev.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in:04826/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.a47722c3-6fe9-42dd-8e39-37d339e4a5ae.drush.in',
    'remote-user' => 'dev.a47722c3-6fe9-42dd-8e39-37d339e4a5ae',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
$aliases["self"] = array (
  'root' => 'C:\\Users\\AJain\\Sites\\devdesktop\\igcommerce_dev_2007-04-02T23-00-00_UTC_code',
  'uri' => 'http://default',
  'path-aliases' => 
  array (
    '%drush' => 'C:\\Users\\Anshul.Jain\\AppData\\Roaming\\Composer\\vendor\\drush\\drush',
    '%site' => 'sites/default/',
  ),
);

