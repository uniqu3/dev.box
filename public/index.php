<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css" />
        <title>DEV box ⚙️ boot up and hit the keyboard</title>
        <link rel="icon"
            href="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/emojione/211/alien-monster_1f47e.png">
        <style>
        .spacing {
            padding-top: 1.5em;
            padding-bottom: 1.5em;
        }

        .height-limit {
            overflow-y: scroll;
            height: 600px;
        }
        </style>
    </head>

    <body>
        <section class="hero is-large is-danger is-bold">
            <div class="hero-body has-text-centered">
                <div class="container">
                    <h1 class="title is-size-1">
                        dev.box ⚙️
                    </h1>
                    <h2 class="subtitle">
                        A simple LAMP/LEMP stack for developers
                    </h2>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <h1 class="title">What's inside</h1>
                <h2 class="subtitle">
                    Information about server stuff and what's included in this stack.
                </h2>
            </div>
            <div class="container spacing">
                <table class="table is-fullwidth is-bordered is-striped is-hoverable">
                    <tr>
                        <th>
                            <span>📦</span>
                            Feature
                        </th>
                        <th>
                            <span>⏰</span>
                            Version
                        </th>
                        <th class="has-text-right">
                            <span>👍</span>
                            Working?
                        </th>
                    </tr>
                    <tr>
                        <td><strong>OS</strong></td>
                        <td>
                            <div class="tags has-addons">
                                <span class="tag is-dark">Ubuntu</span>
                                <span class="tag is-info">18.04</span>
                            </div>
                        </td>
                        <td class="has-text-right">✔</td>
                    </tr>
                    <tr>
                        <td><strong>Apache</strong></td>
                        <td>
                            <div class="field is-grouped is-grouped-multiline">
                                <div class="control">
                                    <div class="tags has-addons">
                                        <span class="tag is-dark">Apache</span>
                                        <span class="tag is-info">2.4.29</span>
                                    </div>
                                </div>
                                <div class="control">
                                    <div class="tags has-addons">
                                        <span class="tag is-dark">Port</span>
                                        <span class="tag is-success">80</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="has-text-right">✔</td>
                    </tr>
                    <tr>
                        <td><strong>nginx</strong></td>
                        <td>
                            <div class="field is-grouped is-grouped-multiline">
                                <div class="control">
                                    <div class="tags has-addons">
                                        <span class="tag is-dark">nginx</span>
                                        <span class="tag is-info">1.14.0</span>
                                    </div>
                                </div>
                                <div class="control">
                                    <div class="tags has-addons">
                                        <span class="tag is-dark">Port</span>
                                        <span class="tag is-success">8080</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="has-text-right">✔</td>
                    </tr>
                    <tr>
                        <td><strong>PHP</strong></td>
                        <td>
                            <div class="tags has-addons">
                                <span class="tag is-dark">Version</span>
                                <span class="tag is-info">7.2.24</span>
                            </div>
                        </td>
                        <td class="has-text-right">✔</td>
                    </tr>
                    <tr>
                        <td><strong>Python</strong></td>
                        <td>
                            <div class="tags has-addons">
                                <span class="tag is-dark">Version</span>
                                <span class="tag is-info">3.6.8</span>
                            </div>
                        </td>
                        <td class="has-text-right">✔</td>
                    </tr>
                    <tr>
                        <td><strong>Node.js</strong></td>
                        <td>
                            <div class="tags has-addons">
                                <span class="tag is-dark">Version</span>
                                <span class="tag is-info">12.13.0</span>
                            </div>
                        </td>
                        <td class="has-text-right">✔</td>
                    </tr>
                    <tr>
                        <td><strong>Go</strong></td>
                        <td>
                            <div class="tags has-addons">
                                <span class="tag is-dark">Version</span>
                                <span class="tag is-info">1.13.3</span>
                            </div>
                        </td>
                        <td class="has-text-right">✔</td>
                    </tr>
                    <tr>
                        <td><strong>Ruby</strong></td>
                        <td>
                            <div class="tags has-addons">
                                <span class="tag is-dark">Version</span>
                                <span class="tag is-info">2.5.1</span>
                            </div>
                        </td>
                        <td class="has-text-right">✔</td>
                    </tr>
                    <tr>
                        <td><strong>Vim</strong></td>
                        <td>
                            <div class="tags has-addons">
                                <span class="tag is-dark">Version</span>
                                <span class="tag is-info">8.0</span>
                            </div>
                        </td>
                        <td class="has-text-right">✔</td>
                    </tr>
                    <tr>
                        <td><strong>Git</strong></td>
                        <td>
                            <div class="tags has-addons">
                                <span class="tag is-dark">Version</span>
                                <span class="tag is-info">2.17.1</span>
                            </div>
                        </td>
                        <td class="has-text-right">✔</td>
                    </tr>
                    <tr>
                        <td><strong>Imagemagick</strong></td>
                        <td>
                            <div class="tags has-addons">
                                <span class="tag is-dark">Version</span>
                                <span class="tag is-info">6.9.7</span>
                            </div>
                        </td>
                        <td class="has-text-right">✔</td>
                    </tr>
                    <tr>
                        <td><strong>Curl</strong></td>
                        <td>
                            <div class="tags has-addons">
                                <span class="tag is-dark">Version</span>
                                <span class="tag is-info">7.58.0</span>
                            </div>
                        </td>
                        <td class="has-text-right">✔</td>
                    </tr>
                    <tr>
                        <td><strong>Beanstalkd</strong></td>
                        <td>
                            <div class="tags has-addons">
                                <span class="tag is-dark">Version</span>
                                <span class="tag is-info">1.10</span>
                            </div>
                        </td>
                        <td class="has-text-right">✔</td>
                    </tr>
                    <tr>
                        <td><strong>ngrok</strong></td>
                        <td>
                            <div class="tags has-addons">
                                <span class="tag is-dark">Version</span>
                                <span class="tag is-info">1.6</span>
                            </div>
                        </td>
                        <td class="has-text-right">✔</td>
                    </tr>
                </table>
            </div>
            <div class="container">
                <h1 class="title">PHP Settings</h1>
                <h2 class="subtitle">
                    Details about PHP
                </h2>
            </div>
            <div class="container spacing">
                <div class="height-limit">
                    <table class="table is-fullwidth is-bordered is-striped is-hoverable">
                        <tr>
                            <th>
                                <span>📦</span>
                                Feature
                            </th>
                            <th>
                                <span>⏰</span>
                                Version
                            </th>
                            <th class="has-text-right">
                                <span>👍</span>
                                Working?
                            </th>
                        </tr>
                        <tr>
                            <td><strong>PHP</strong></td>
                            <td>
                                <div class="tags has-addons">
                                    <span class="tag is-dark">Version</span>
                                    <span class="tag is-info"><?= phpversion(); ?></span>
                                </div>
                            </td>
                            <td class="has-text-right">✔</td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>Modules</strong></td>
                        </tr>
                        <?php
                    $modules = get_loaded_extensions();
                    asort($modules);
                    foreach ($modules as $extension) :
                    ?>
                        <tr>
                            <td colspan="2"><?php echo $extension; ?></td>
                            <td class="has-text-right">✔</td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
            <div class="container spacing">
                <div class="hero is-small is-danger">
                    <div class="hero-body">
                        <h1 class="title">Helper</h1>
                        <h2 class="subtitle">
                            Need a quickstart?
                        </h2>
                    </div>
                </div>
                <div class="columns spacing">
                    <div class="column is-two-fifths">
                        <h3 class="has-text-weight-medium">Composer</h3>
                        <div class="tags has-addons">
                            <span class="tag is-dark">Version</span>
                            <span class="tag is-info">1.9.1</span>
                        </div>
                    </div>
                    <div class="column">
                        <p>Composer comes with cgr installed.<br />
                            Use it instead of <code>global require</code> installation in example
                            <code>cgr phpunit/phpunit</code> so globally installed plugins do not collide.</p>
                    </div>
                </div>
                <table class="table is-fullwidth is-bordered is-striped is-hoverable">
                    <tr>
                        <td><a href="https://phpunit.de/">PHPUnit</a></td>
                        <td>
                            <div class="tags has-addons">
                                <span class="tag is-dark">Version</span>
                                <span class="tag is-info">8.4.2</span>
                            </div>
                        </td>
                        <td><code>$ phpunit</code></td>
                        <td class="has-text-right">✔</td>
                    </tr>
                    <tr>
                        <td><a href="https://wp-cli.org/de/">WP-CLI</a></td>
                        <td>
                            <div class="tags has-addons">
                                <span class="tag is-dark">Version</span>
                                <span class="tag is-info">2.3.0</span>
                            </div>
                        </td>
                        <td><code>$ wp</code></td>
                        <td class="has-text-right">✔</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.drush.org/">Drush</a></td>
                        <td>
                            <div class="tags has-addons">
                                <span class="tag is-dark">Version</span>
                                <span class="tag is-info">10.0.1</span>
                            </div>
                        </td>
                        <td><code>$ drush</code></td>
                        <td class="has-text-right">✔</td>
                    </tr>
                    <tr>
                        <td><a href="https://wireshell.pw/">Wireshell</a></td>
                        <td>
                            <div class="tags has-addons">
                                <span class="tag is-dark">Version</span>
                                <span class="tag is-info">1.0.6</span>
                            </div>
                        </td>
                        <td><code>$ wireshell</code></td>
                        <td class="has-text-right">✔</td>
                    </tr>
                    <tr>
                        <td><a href="https://laravel.com/docs/6.x">Laravel Installer</a></td>
                        <td>
                            <div class="tags has-addons">
                                <span class="tag is-dark">Version</span>
                                <span class="tag is-info">2.2.0</span>
                            </div>
                        </td>
                        <td><code>$ laravel</code></td>
                        <td class="has-text-right">✔</td>
                    </tr>
                </table>
            </div>
            <div class="container spacing">
                <div class="hero is-small is-danger">
                    <div class="hero-body">
                        <h1 class="title">Ruby</h1>
                        <h2 class="subtitle">
                            Developing with Ruby?
                        </h2>
                    </div>
                </div>
                <div class="container spacing">
                    <table class="table is-fullwidth is-bordered is-hoverable">
                        <tr>
                            <td><a href="https://rvm.io/">RVM</a></td>
                            <td>
                                <div class="tags has-addons">
                                    <span class="tag is-dark">Version</span>
                                    <span class="tag is-info">1.29.9</span>
                                </div>
                            </td>
                            <td><code>$ rvm</code></td>
                            <td class="has-text-right">✔</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="container spacing">
                <div class="hero is-small is-danger">
                    <div class="hero-body">
                        <h1 class="title">Node.js</h1>
                        <h2 class="subtitle">
                            Spin up a Node.js Project!
                        </h2>
                    </div>
                </div>
                <div class="container spacing">
                    <table class="table is-fullwidth is-bordered is-striped is-hoverable">
                    <tr>
                            <td>Node.js</td>
                            <td>
                                <div class="tags has-addons">
                                    <span class="tag is-dark">Version</span>
                                    <span class="tag is-info">12.13.0</span>
                                </div>
                            </td>
                            <td colspan="2" class="has-text-right">✔</td>
                        </tr>
                        <tr>
                            <td><a href="https://www.npmjs.com/">npm</a></td>
                            <td>
                                <div class="tags has-addons">
                                    <span class="tag is-dark">Version</span>
                                    <span class="tag is-info">6.12.1</span>
                                </div>
                            </td>
                            <td><code>$ npm</code></td>
                            <td class="has-text-right">✔</td>
                        </tr>
                        <tr>
                            <td><a href="https://yarnpkg.com/">Yarn</a></td>
                            <td>
                                <div class="tags has-addons">
                                    <span class="tag is-dark">Version</span>
                                    <span class="tag is-info">1.19.1</span>
                                </div>
                            </td>
                            <td><code>$ yarn</code></td>
                            <td class="has-text-right">✔</td>
                        </tr>
                        <tr>
                            <td colspan="4"><span class="has-text-weight-bold">Global packages</span></td>
                        </tr>
                        <tr>
                            <td><a href="https://gruntjs.com/">Grunt</a></td>
                            <td>
                                <div class="tags has-addons">
                                    <span class="tag is-dark">Version</span>
                                    <span class="tag is-info">1.0.4</span>
                                </div>
                            </td>
                            <td colspan="2" class="has-text-right">✔</td>
                        </tr>
                        <tr>
                            <td><a href="https://gulpjs.com/">Gulp</a></td>
                            <td>
                                <div class="tags has-addons">
                                    <span class="tag is-dark">Version</span>
                                    <span class="tag is-info">4.41.2</span>
                                </div>
                            </td>
                            <td colspan="2" class="has-text-right">✔</td>
                        </tr>
                        <tr>
                            <td><a href="https://webpack.js.org/">webpack</a></td>
                            <td>
                                <div class="tags has-addons">
                                    <span class="tag is-dark">Version</span>
                                    <span class="tag is-info">4.0.2</span>
                                </div>
                            </td>
                            <td colspan="2" class="has-text-right">✔</td>
                        </tr>
                        <tr>
                            <td><a href="https://webpack.js.org/">webpack-cli</a></td>
                            <td>
                                <div class="tags has-addons">
                                    <span class="tag is-dark">Version</span>
                                    <span class="tag is-info">3.3.10</span>
                                </div>
                            </td>
                            <td colspan="2" class="has-text-right">✔</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <h1 class="title">Database choices</h1>
                <h2 class="subtitle">
                    There are few Database options preinstalled for you
                </h2>
            </div>
            <div class="container spacing">
                <table class="table is-fullwidth is-bordered is-hoverable">
                    <tr>
                        <th colspan="3">
                            MySQL
                        </th>
                    </tr>
                    <?php
                        $mysql_exists = FALSE;
                        if (extension_loaded('mysql') or extension_loaded('mysqli')) :
                            $mysql_exists = TRUE;
                        endif;
                        $mysqli = new mysqli('localhost', 'devbox', 'devbox');
                        $mysql_running = TRUE;
                        if (mysqli_connect_errno()) {
                            $mysql_running = FALSE;
                        } else {
                            $mysql_version = $mysqli->server_info;
                        }

                        $mysqli->close();
                        ?>
                    <tr>
                        <td>Version</td>
                        <td class="has-text-right">
                            <div class="tags has-addons is-pulled-right">
                                <span class="tag is-dark">Version</span>
                                <span class="tag is-info"><?= ($mysql_running ? $mysql_version : 'Nope'); ?></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Connected?</strong></td>
                        <td class="has-text-right">
                            <?= ($mysql_running ? '✅' : '❌'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Hostname</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input" type="text" value="localhost" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Port</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input" type="text" value="3306" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Username</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input" type="text" value="devbox" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Password</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input" type="text" value="devbox" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Database</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input" type="text" value="devbox" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="container spacing">
                <table class="table is-fullwidth is-bordered is-hoverable">
                    <tr>
                        <th colspan="3">
                            PostgreSQL
                        </th>
                    </tr>
                    <?php
                    $psql_is_connected = FALSE;
                    $psql_conn = pg_connect('host=localhost port=5432 dbname=devbox user=devbox password=devbox');
                    if ($psql_conn) $psql_is_connected = TRUE;
                    $psql_version = pg_version($psql_conn)['client'];
                    pg_close($psql_conn);
                    ?>
                    <tr>
                        <td>Version</td>
                        <td class="has-text-right">
                            <div class="tags has-addons is-pulled-right">
                                <span class="tag is-dark">Version</span>
                                <span class="tag is-info"><?= ($psql_is_connected ? $psql_version : 'Nope'); ?></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Connected?</strong></td>
                        <td class="has-text-right">
                            <?= ($psql_is_connected ? '✅' : '❌'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Hostname</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input" type="text" value="localhost" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Port</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input" type="text" value="5432" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Username</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input" type="text" value="devbox" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Password</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input" type="text" value="devbox" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Database</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input" type="text" value="devbox" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="container spacing">
                <table class="table is-fullwidth is-bordered is-hoverable">
                    <tr>
                        <th colspan="3">
                            MongoDB
                        </th>
                    </tr>
                    <?php
                    $mongodb_is_connected = FALSE;
                    if (extension_loaded('mongodb')) :
                        $mongodb = new MongoDB\Driver\Manager("mongodb://localhost:27017");
                        if ($mongodb) $mongodb_is_connected = TRUE;
                    endif;
                    ?>
                    <tr>
                        <td>Version</td>
                        <td class="has-text-right">
                            <div class="tags has-addons is-pulled-right">
                                <span class="tag is-dark">Version</span>
                                <span class="tag is-info">4.2.1</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Connected?</strong></td>
                        <td class="has-text-right">
                            <?= ($mongodb_is_connected ? '✅' : '❌'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Hostname</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input" type="text" value="localhost" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Port</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input" type="text" value="27017" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="container spacing">
                <table class="table is-fullwidth is-bordered is-hoverable">
                    <tr>
                        <th colspan="3">
                            SQLite
                        </th>
                    </tr>
                    <tr>
                        <td>Version</td>
                        <td class="has-text-right">
                            <div class="tags has-addons is-pulled-right">
                                <span class="tag is-dark">Version</span>
                                <span class="tag is-info"><?= SQLite3::version()['versionString'] ?></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <p class="has-text-weight-bold">Example</p>
                            <code>$db = new SQLite3('your.db');</code>
                        </td>
                    </tr>
                </table>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <h1 class="title">SSH</h1>
                <h2 class="subtitle">
                    Connecting to the box
                </h2>
            </div>
            <div class="container spacing">
                <table class="table is-fullwidth is-bordered is-hoverable">
                    <tr>
                        <td colspan="3">
                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">SSH Host</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input" type="text" value="127.0.0.1" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Port</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input" type="text" value="2222" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Username</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input" type="text" value="vagrant" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Password</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input" type="text" value="vagrant" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <p><span class="has-text-weight-bold title is-size-4">Connecting with Vagrant</span><br />
                                <code>vagrant ssh</code></p>
                                <p><span class="has-text-weight-bold title is-size-4">Doesn't work?</span><br />
                                <small>You can try it like this</small><br />
                                <code>vagrant ssh-config</code></p>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <h1 class="title">Caching</h1>
                <h2 class="subtitle">
                    For better performance!
                </h2>
            </div>
            <div class="container spacing">
                <table class="table is-fullwidth is-bordered is-hoverable">
                    <tr>
                        <th colspan="3">
                            <h3>Memcached</h3>
                        </th>
                    </tr>
                    <tr>
                    <?php
                    $memcached_running = FALSE;
                    $memcached_version = FALSE;
                    if (class_exists('Memcached')) :
                        $m = new Memcached();
                        if ($m->addServer('localhost', 11211)) {
                            $memcached_running = TRUE;
                            $memcached_version = $m->getVersion();
                            $memcached_version = current($memcached_version);
                        }
                    endif;
                    ?>
                        <td><strong>Connected?</strong></td>
                        <td class="has-text-right">
                            <?= ($memcached_running ? '✅' : '❌'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Version</td>
                        <td class="has-text-right">
                            <div class="tags has-addons is-pulled-right">
                                <span class="tag is-dark">Version</span>
                                <span class="tag is-info"><?= ($memcached_running ? $memcached_version : 'Nope'); ?></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Hostname</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input" type="text" value="localhost" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Port</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input" type="text" value="11211" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="container spacing">
                <table class="table is-fullwidth is-bordered is-hoverable">
                    <tr>
                        <th colspan="3">
                            <h3>Redis</h3>
                        </th>
                    </tr>
                    <tr>
                    <?php
                    $redis = new Redis();
                    $redis->connect('127.0.0.1', 6379);
                    ?>
                        <td><strong>Connected?</strong></td>
                        <td class="has-text-right">
                            <?= ($redis->ping() ? '✅' : '❌'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Version</td>
                        <td class="has-text-right">
                            <div class="tags has-addons is-pulled-right">
                                <span class="tag is-dark">Version</span>
                                <span class="tag is-info"><?= ($redis->ping() ? $redis->info('SERVER')['redis_version'] : 'Nope'); ?></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Hostname</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input" type="text" value="localhost" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Port</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input" type="text" value="6379" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <h1 class="title">Mailing</h1>
                <h2 class="subtitle">
                    Need to test emails?
                </h2>
            </div>
            <div class="container spacing">
                <table class="table is-fullwidth is-bordered is-hoverable">
                    <tr colspan="3">
                        <th colspan="2">
                            Mailhog
                        </th>
                    </tr>
                    <tr>
                        <td>Version</td>
                        <td>
                            <div class="tags has-addons is-pulled-right">
                                <span class="tag is-dark">Version</span>
                                <span class="tag is-info">1.0</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="spacing">
                                <p>Testing emails is easy, simply open the Mailhog interface</p><br />
                                <a class="button is-success" href="//<?= $_SERVER['SERVER_ADDR'] ?>:8025"><?= $_SERVER['SERVER_ADDR'] ?>:8025</a>
                            </div>
<pre class="highlight">
    <code>
    &lt;?php
        $msg = 'Email testing locally';
        mail('mail@test.co', 'Test email', $msg);
    ?&gt;
    </code>
</pre>
                        </td>
                    </tr>
                </table>
            </div>
        </section>
    </body>
</html>
