<?
$wesotaCore = $GLOBALS['WESOTACORE'];

$APPLICATION = $wesotaCore->getApplication();
if(!$APPLICATION)
    exit();

$USER = $wesotaCore->getUser();
if(!$USER)
    exit();


$requestContext = $APPLICATION->getContext()->getRequest();

$request = [];

$request['METHOD'] = $_SERVER['REQUEST_METHOD'];
$request['URI'] = $_SERVER['REQUEST_URI'];
$request['ARGUMENTS']['REQUEST'] = $requestContext->get('request');

if($request['METHOD'] != 'GET' || $request['METHOD'] != 'POST')
{
    if($request['METHOD'] == 'PUT')
    {
        $putdata = file_get_contents('php://input');
        $exploded = explode('&', $putdata);
        foreach($exploded as $pair) {
            $item = explode('=', $pair);
            if(count($item) == 2) {
                $_PUT[urldecode($item[0])] = htmlspecialchars(trim(urldecode($item[1])));
            }
            $request['ARGUMENTS'] = array_merge($request['ARGUMENTS'], $_PUT);
        }

    } elseif($request['METHOD'] == 'DELETE')
    {
        //etc..
    }
}
if(
    (
        !isset($request['METHOD']) ||
        $request['METHOD']==null ||
        $request['METHOD']=='' ||
        $request['METHOD']==false ||
        strlen($request['METHOD'])<=0 ||
        empty($request['METHOD']) ||
        !$request['METHOD']
    ) ||
    (
        !isset($request['ARGUMENTS']['REQUEST']) ||
        $request['ARGUMENTS']['REQUEST']==null ||
        $request['ARGUMENTS']['REQUEST']=='' ||
        $request['ARGUMENTS']['REQUEST']==false ||
        strlen($request['ARGUMENTS']['REQUEST'])<=0 ||
        empty($request['ARGUMENTS']['REQUEST']) ||
        !$request['ARGUMENTS']['REQUEST']
    )
) {
    //http_response_code(403);
    $ret = [
        'exc' => true,
        'status' => 403,
        'msg' => 'Error! to line in file: ' . __LINE__
    ];
    //exit(json_encode(['answer' => ['status' => 403, 'respond' => 'Error! to line in file: ' . __LINE__]]));
}
if(!$USER->isAuthorized()) {
    $ret = [
        'exc' => true,
        'status' => 403,
        'msg' => 'Error! User NoAuthorized!'
    ];
} else {
    $ret['USER'] = [
        'login' => $USER->getLogin(),
        'fn' => $USER->getFullname(),
        'id' => $USER->getID()
    ];
}

