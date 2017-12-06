<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Backend\CommonController;
use App\CourseDYW;
header("content-type:text/html;charset=utf-8");

class IndexController extends CommonController
{
    //后台Index首页
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     */
    public function index(){
        $infoooo = $_SESSION['userInfo'];
        return view('backend.index.index',['infoo'=>$infoooo]);

    }

    //direction--------------------start
    //添加方向页面
    public function addDirection(){
        $infoooo = $_SESSION['userInfo'];
        return view('backend.index.addDirection',['infoo'=>$infoooo]);
    }
    //接收方向数据并添加
    public function addDirectionDo(Request $request){
        $data = $request->input();
        $res = (new CourseDYW)->addDirectionDo($data);
        if($res) return redirect('index');
    }
    //方向列表展示页面
    public function directionList(){
        $infoooo = $_SESSION['userInfo'];
        $model = new CourseDYW();
        $directionData = $model->cacheData('directionList','directionList');
        $directionData ? $directionData : [];
        return view('backend.index.directionList',['directionData'=>$directionData,'infoo'=>$infoooo]);
    }
    //方向删除
    public function delDirection($dir_id=0){
        $res = (new CourseDYW)->delDirection($dir_id);
        if($res) return redirect('directionList');
    }
    //修改方向名称
    public function editDirection(Request $request){
        $dir_id = $request->input('dir_id');
        $dir_name = $request->input('dir_name');
        $dir_updatetime = date("Y-m-d H:i:s",time());
        $res = (new CourseDYW)->editDirection($dir_id,$dir_name,$dir_updatetime);
        if($res){
            $data = ['code'=>1];
            echo json_encode($data);
        }else{
            $data = ['code'=>0];
            echo json_encode($data);
        }
    }
    //修改方向状态
    public function editDirectionStatus(Request $request){
        $dir_id = $request->input('dir_id');
        $dir_status = $request->input('dir_status');
        $res = (new CourseDYW)->editDirectionStatus($dir_id,$dir_status);
        if($res){
            $data = ['code'=>1];
            echo json_encode($data);
        }else{
            $data = ['code'=>0];
            echo json_encode($data);
        }
    }
    //direction--------------------end


    //classify--------------------start
    //添加分类页面
    public function addClassify(){
        $infoooo = $_SESSION['userInfo'];
        $data = (new CourseDYW)->addDirection();
        return view('backend.index.addClassify',['data'=>$data,'infoo'=>$infoooo]);
    }
    //接收分类数据并添加
    public function addClassifyDo(Request $request){
        $data = $request->input();
        $res = (new CourseDYW)->addClassifyDo($data);
        if($res) return redirect('index');
    }
    //分类列表展示页面
    public function classifyList(){
        $infoooo = $_SESSION['userInfo'];
        $model = new CourseDYW();
        $classifyData = $model->cacheData('classifyList','classifyList');
        $classifyData ? $classifyData : [];
//        $classifyData = (new CourseDYW)->classifyList();
        return view('backend.index.classifyList',['classifyData'=>$classifyData,'infoo'=>$infoooo]);
    }
    //分类删除
    public function delClassify($class_id=0){
        $res = (new CourseDYW)->delClassify($class_id);
        if($res) return redirect('classifyList');
    }
    //修改分类名称
    public function editClassify(Request $request){
        $class_id = $request->input('class_id');
        $class_name = $request->input('class_name');
        $res = (new CourseDYW)->editClassify($class_id,$class_name);
        if($res){
            $data = ['code'=>1];
            echo json_encode($data);
        }else{
            $data = ['code'=>0];
            echo json_encode($data);
        }
    }
    //修改分类状态
    public function editClassifyStatus(Request $request){
        $class_id = $request->input('class_id');
        $class_status = $request->input('class_status');
        $res = (new CourseDYW)->editClassifyStatus($class_id,$class_status);
        if($res){
            $data = ['code'=>1];
            echo json_encode($data);
        }else{
            $data = ['code'=>0];
            echo json_encode($data);
        }
    }
    //classify--------------------end



    //type--------------------start
    //添加类型页面
    public function addType(){
        $infoooo = $_SESSION['userInfo'];
        $dir_data = (new CourseDYW)->addDirection();
        $class_data = (new CourseDYW)->addClassify();
        return view('backend.index.addType',['dir_data'=>$dir_data,'class_data'=>$class_data,'infoo'=>$infoooo]);
    }
    //接收类型数据并添加
    public function addTypeDo(Request $request){
        $data = $request->input();
        $res = (new CourseDYW)->addTypeDo($data);
        if($res) return redirect('index');
    }
    //类型列表展示页面(如何查找类型的父类)
    public function typeList(){
        $infoooo = $_SESSION['userInfo'];
        $model = new CourseDYW();
        $typeData = $model->cacheData('typeList','typeList');
        $typeData ? $typeData : [];
//        $typeData = (new CourseDYW)->typeList();
        return view('backend.index.typeList',['typeData'=>$typeData,'infoo'=>$infoooo]);
    }
    //类型删除
    public function delType($type_id=0){
        $res = (new CourseDYW)->delType($type_id);
        if($res) return redirect('typeList');
    }
    //修改类型名称
    public function editType(Request $request){
        $type_id = $request->input('type_id');
        $type_name = $request->input('type_name');
        $res = (new CourseDYW)->editType($type_id,$type_name);
        if($res){
            $data = ['code'=>1];
            echo json_encode($data);
        }else{
            $data = ['code'=>0];
            echo json_encode($data);
        }
    }
    //修改类型状态
    public function editTypeStatus(Request $request){
        $type_id = $request->input('type_id');
        $type_status = $request->input('type_status');
        $res = (new CourseDYW)->editTypeStatus($type_id,$type_status);
        if($res){
            $data = ['code'=>1];
            echo json_encode($data);
        }else{
            $data = ['code'=>0];
            echo json_encode($data);
        }
    }
    //type--------------------start

    //courses-----------------start
    //添加课程页面
    public function addCourse(){
        $infoooo = $_SESSION['userInfo'];
        $dirData = (new CourseDYW)->addDirection();
        $classData = (new CourseDYW)->addClassify();
        $typeData = (new CourseDYW)->addType();
        return view('backend.course.addCourse',['dirData'=>$dirData,'classData'=>$classData,'typeData'=>$typeData,'infoo'=>$infoooo]);
    }

    //添加课程
    public function addCourseDo(Request $request){
        $data = $request->input();
        $image = $_FILES['cour_image'];
        $res = (new CourseDYW)->addCourseDo($data,$image);
        if($res) return redirect('courseList');
    }

    //课程展示页面
    public function courseList(){
        $infoooo = $_SESSION['userInfo'];
        $model = new CourseDYW();
        $data = $model->cacheData('courseList','courseList');
        $data ? $data : [];
//        $data = (new CourseDYW)->courseList();
        return view('backend.course.courseList',['data'=>$data,'infoo'=>$infoooo]);
    }

    //课程删除
    public function delCourse($cour_id){
        $res = (new CourseDYW)->delCourse($cour_id);
        if($res) return redirect('courseList');
    }

    //课程修改
    public function editCourse($cour_id){
        $data = (new CourseDYW)->editCourse($cour_id);
        if($data) return redirect('courseList');
//        return view('backend.course.editCourse',['data'=>$data]);
    }
    //courses-----------------end

    //chapter-----------------start
    //添加章节页面
    public function addChapter(){
        $infoooo = $_SESSION['userInfo'];
        $courseData = (new CourseDYW)->addCourse();
        return view('backend.chapter.addChapter',['courseData'=>$courseData,'infoo'=>$infoooo]);
    }
    //接收章节数据并添加
    public function addChapterDo(Request $request){
        $data = $request->input();
        $res = (new CourseDYW)->addChapterDo($data);
        if($res) return redirect('chapterList');
    }

    //章节展示页面
    public function chapterList(){
        $infoooo = $_SESSION['userInfo'];
        $model = new CourseDYW();
        $data = $model->cacheData('chapterList','chapterList');
        $data ? $data : [];
//        $data = (new CourseDYW)->chapterList();
        return view('backend.chapter.chapterList',['data'=>$data,'infoo'=>$infoooo]);
    }

    //删除章节
    public function delChapter($chap_id){
        $res = (new CourseDYW)->delChapter($chap_id);
        if($res) return redirect('chapterList');
    }
    //chapter-----------------end


    //smallMatter-----------------start
    //添加小节页面
    public function addSmallMatter(){
        $infoooo = $_SESSION['userInfo'];
        $courseData = (new CourseDYW)->addCourse();
        $smallMatterData = (new CourseDYW)->addChapter();
        return view('backend.smallMatter.addSmallMatter',['courseData'=>$courseData,'smallMatterData'=>$smallMatterData,'infoo'=>$infoooo]);
    }
    //接收小节数据并添加
    public function addSmallMatterDo(Request $request){
        $data = $request->input();
        $res = (new CourseDYW)->smallMatterList($data);
        if($res) return redirect('smallMatterList');
    }

    //小节展示
    public function smallMatterList(){
        $infoooo = $_SESSION['userInfo'];
        $data = (new CourseDYW)->smallMatterList();
        return view('backend.smallMatter.smallMatterList',['data'=>$data,'infoo'=>$infoooo]);
    }

    //小节删除
    public function delSmallMatter($small_id){
        $res = (new CourseDYW)->delSmallMatter($small_id);
        if($res) return redirect('smallMatterList');
    }
    //smallMatter--------------end

    //video--------------------start
    //视频添加
    public function addVideo(){
        $infoooo = $_SESSION['userInfo'];
        $data = (new CourseDYW)->addSmallMatter();
        return view('backend.video.addVideo',['data'=>$data,'infoo'=>$infoooo]);
    }
    //保存视频切片并合并成完整的视频
    public function section(){
        header("Access-Control-Allow-origin:*");
        //header("Access-Control-Allow-Credentials:true");
        //header('Access-Control-Allow-Headers:x-requested-with,content-type');
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");

        // Support CORS
        // header("Access-Control-Allow-Origin: *");
        // other CORS headers if any...
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
            exit; // finish preflight CORS requests here
        }

        if ( !empty($_REQUEST[ 'debug' ]) ) {
            $random = rand(0, intval($_REQUEST[ 'debug' ]) );
            if ( $random === 0 ) {
                header("HTTP/1.0 500 Internal Server Error");
                exit;
            }
        }
        //var_dump($_REQUEST);
        // header("HTTP/1.0 500 Internal Server Error");
        // exit;


        // 5 minutes execution time
        @set_time_limit(5 * 60);

        $targetDir = 'backend/upload_tmp';
        $uploadDir = 'backend/upload';

        $cleanupTargetDir = true; // Remove old files
        $maxFileAge = 5 * 3600; // Temp file age in seconds


        // Create target dir
        if (!file_exists($targetDir)) {
            @mkdir($targetDir);
        }

        // Create target dir
        if (!file_exists($uploadDir)) {
            @mkdir($uploadDir);
        }

        // Get a file name
        if (isset($_REQUEST["name"])) {
            $fileName = $_REQUEST["name"];
        } elseif (!empty($_FILES)) {
            $fileName = $_FILES["file"]["name"];
        } else {
            $fileName = uniqid("file_");
        }

        $filePath = $targetDir . DIRECTORY_SEPARATOR . $fileName;
        $uploadPath = $uploadDir . DIRECTORY_SEPARATOR . $fileName;

        // Chunking might be enabled
        $chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
        $chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 1;


        // Remove old temp files
        if ($cleanupTargetDir) {
            if (!is_dir($targetDir) || !$dir = opendir($targetDir)) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');
            }

            while (($file = readdir($dir)) !== false) {
                $tmpfilePath = $targetDir . DIRECTORY_SEPARATOR . $file;

                // If temp file is current file proceed to the next
                if ($tmpfilePath == "{$filePath}_{$chunk}.part" || $tmpfilePath == "{$filePath}_{$chunk}.parttmp") {
                    continue;
                }

                // Remove temp file if it is older than the max age and is not the current file
                if (preg_match('/\.(part|parttmp)$/', $file) && (@filemtime($tmpfilePath) < time() - $maxFileAge)) {
                    @unlink($tmpfilePath);
                }
            }
            closedir($dir);
        }

        // Open temp file
        if (!$out = @fopen("{$filePath}_{$chunk}.parttmp", "wb")) {
            die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
        }

        if (!empty($_FILES)) {
            if ($_FILES["file"]["error"] || !is_uploaded_file($_FILES["file"]["tmp_name"])) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
            }

            // Read binary input stream and append it to temp file
            if (!$in = @fopen($_FILES["file"]["tmp_name"], "rb")) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
            }
        } else {
            if (!$in = @fopen("php://input", "rb")) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
            }
        }

        while ($buff = fread($in, 4096)) {
            fwrite($out, $buff);
        }

        @fclose($out);
        @fclose($in);

        rename("{$filePath}_{$chunk}.parttmp", "{$filePath}_{$chunk}.part");

        $index = 0;
        $done = true;
        for( $index = 0; $index < $chunks; $index++ ) {
            if ( !file_exists("{$filePath}_{$index}.part") ) {
                $done = false;
                break;
            }
        }
        if ( $done ) {
            if (!$out = @fopen($uploadPath, "wb")) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
            }

            if ( flock($out, LOCK_EX) ) {
                for( $index = 0; $index < $chunks; $index++ ) {
                    if (!$in = @fopen("{$filePath}_{$index}.part", "rb")) {
                        break;
                    }

                    while ($buff = fread($in, 4096)) {
                        fwrite($out, $buff);
                    }

                    @fclose($in);
                    @unlink("{$filePath}_{$index}.part");
                }

                flock($out, LOCK_UN);
            }
            @fclose($out);
        }

        // Return Success JSON-RPC response
        die('{"jsonrpc" : "2.0", "result" : null, "id" : "id"}');
    }

    //接收视频并添加
    public function addVideoDo(Request $request){
        $small_id = $request->input('small_id');
        $fileName = $request->input('fileName');
        $res = (new CourseDYW)->addVideoDo($small_id,$fileName);
        if($res) return redirect('videoList');
    }
    //视频展示页面
    public function videoList(){
        $infoooo = $_SESSION['userInfo'];
        $data = (new CourseDYW())->videoList();
        return view('backend.video.videoList',['data'=>$data,'infoo'=>$infoooo]);
    }
    //视频删除
    public function delVideo($video_id){
        $res = (new CourseDYW())->delVideo($video_id);
        if($res) return redirect('videoList');
    }
}