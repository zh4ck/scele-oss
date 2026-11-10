<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();
$CFG->session_update_timemodified_frequency = 3600;

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '10.119.105.224';
$CFG->dbname    = 'scele_s1';
$CFG->dbuser    = 'scele_s1';
$CFG->dbpass    = 'Fooh0saj';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
);

$CFG->wwwroot   = 'https://scele.cs.ui.ac.id';
$CFG->dataroot  = '/home/scele-ng/data/moodledata_s1';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;
$CFG->grader_url = 'https://sofita.cs.ui.ac.id';
$CFG->grader_token = 'd54e5079491a5c5780f9e575eeb6470eeccabad788366da9ab54c29aa6a60e32';

$CFG->activezoom = array();
$CFG->zoomcall = false;

$CFG->enable_read_only_sessions = true;
$CFG->enable_read_only_sessions_debug = true;

$CFG->defaultblocks_override = 'activity_modules,search_forums,course_list:news_items,calendar_upcoming,recent_activity';

$CFG->cachestore_redis = [
    'server' => '127.0.0.1', 
    'prefix' => 'SCeLeS1_',
    'password' => '', 
    'db' => 0,
    'timeout' => 2,
    'persistent' => false,
];

$CFG->session_handler_class = '\core\session\redis';
$CFG->session_redis_host = '127.0.0.1'; 
$CFG->session_redis_port = 6379; 
$CFG->session_redis_password = ''; 
$CFG->session_redis_database = 0; 
$CFG->session_redis_prefix = 'S1Session_'; 
$CFG->session_redis_acquire_lock_timeout = 120; 
$CFG->session_redis_lock_expire = 7200; 
$CFG->session_redis_lock_timeout = 500; 
$CFG->session_redis_acquire_lock_timeout = 3000; 

$CFG->preventexecpath = true;

$CFG->allowedcspdomains = [
    'img-src' => [
        'https://secure.gravatar.com',
        'https://*.gravatar.com',
    ],
];



require_once(dirname(__FILE__) . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
$CFG->preventsessioniplock = true;

