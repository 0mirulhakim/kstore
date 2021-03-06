<?php
use Illuminate\Support\Facades\Route;
use App\AsetStatus;
use App\Printer;
use App\AsetModel;
use App\Brand;
use App\Procurement_type;
use App\Staff;
use App\History;

use App\Models\Datatable;
use Yajra\DataTables\DataTables;
use App\Supplier;
include_once 'web_builder.php';
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::pattern('slug', '[a-z0-9- _]+');

Route::get('myform',array('as'=>'myform','uses'=>'HomeController@myform'));
Route::get('createStaff/ajax/{id}',array('as'=>'createStaff.ajax','uses'=>'HomeController@createStaffAjax'));

Route::get('/guest', 'guestController@showHome')->name('guest');
Route::get('/application', 'guestController@toner_appl')->name('application');
Route::get('/semakan', 'guestController@formSemak')->name('semak-status');
Route::get('/semak_res', 'guestController@Semak')->name('semak');
Route::get('/history', 'guestController@formSejarah')->name('history');
Route::get('/detailhistory', 'guestController@Sejarah')->name('detailhistory');
Route::get('/hantarpermohonan', 'guestController@SubmitApplication')->name('hantarpermohonan');

Route::group(['prefix' => 'admin', 'as'=> 'aset:'], function () {
    Route::get('/registerPrinter', 'AsetController@regAsetPrinter')->name('registerPrinter');
    Route::get('/KemaskiniAset/{id}', 'AsetController@KemaskiniAset')->name('KemaskiniAset');
    
    Route::get('/getModelss/{id}', 'AsetController@getModelss');
    Route::get('registerPrinter/ajax/{id}',array('as'=>'registerPrinter.ajax','uses'=>'AsetController@regAsetPrinterAjax'));
    Route::get('/getModel/{id}', 'AsetController@getModel');
    Route::post('/storePrinter', 'AsetController@storeAsetPrinter')->name('storePrinter');
    Route::post('/editPenempatan', 'AsetController@editPenempatan')->name('editPenempatan');
    Route::post('/editAset', 'AsetController@editAset')->name('editAset');
    Route::get('/detailsPrinter/{id}', 'AsetController@asetDetails')->name('detailsPrinter');
    Route::get('/KemaskiniPenempatan/{id}', 'AsetController@KemaskiniPenempatan')->name('KemaskiniPenempatan');
    //Route::get('/laporanfilter', 'AsetController@laporanfilter')->name('filter');
    Route::get('/editor', 'AsetController@laporanindex')->name('laporan');
    Route::get('/aset', 'AsetController@index')->name('aset');
    Route::get('dynamic_dependent', 'AsetController@index');
    Route::post('dynamic_dependent/fetch', 'AsetController@fetch')->name('dynamicdependent.fetch');
});

Route::group(['prefix' => 'admin', 'as'=> 'brand:'], function () {
    Route::get('/Brand', 'AsetController@Brand')->name('Brand');
    Route::get('/createBrand', 'AsetController@createBrand')->name('createBrand');
    Route::post('/storeBrand', 'AsetController@storeBrand')->name('storeBrand');
});

Route::group(['prefix' => 'admin', 'as'=> 'model:'], function () {
    Route::get('/asetModel', 'AsetController@asetModel')->name('asetModel');
    Route::get('/createModel', 'AsetController@createModel')->name('createModel');
    Route::post('/storeModel', 'AsetController@storeModel')->name('storeModel');
});

Route::group(['prefix' => 'admin', 'as'=> 'toner:'], function () {
    Route::get('/toner', 'TonerController@index')->name('toner');
    Route::get('/list/{model}', 'TonerController@tonerList')->name('list');
    Route::get('/createToner/{model}', 'TonerController@createToner')->name('createToner');
    Route::post('/storeToner/{model}', 'TonerController@storeToner')->name('storeToner');

});

Route::group(['prefix' => 'admin', 'as'=> 'supplier:'], function () {
    Route::get('/supplier', 'SupplierController@index')->name('supplier');
    Route::get('/createSupplier', 'SupplierController@createSupplier')->name('createSupplier');
    Route::post('/storeSupplier', 'SupplierController@storeSupplier')->name('storeSupplier');
});

Route::group(['prefix' => 'admin', 'as' => 'hr:'], function (){
    Route::get('/staff', 'HrController@index')->name('staff');
    Route::get('/editStaff/{id}', 'HrController@editStaff')->name('editStaff');
    Route::get('/createStaff', 'HrController@createStaff')->name('createStaff');
    Route::get('/unit', 'HrController@units')->name('unit');
    Route::get('/createUnit', 'HrController@createUnit')->name('createUnit');
    Route::post('/storeStaff', 'HrController@storeStaff')->name('storeStaff');
    Route::post('/storeUnit', 'HrController@storeUnit')->name('storeUnit');
    Route::get('createStaff/ajax/{id}',array('as'=>'createStaff.ajax','uses'=>'HrController@createStaffAjax'));
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/newApplication', 'TonerController@newAppl')->name('newApplication');
    Route::get('/verifyApplication', 'TonerController@verifyAppl')->name('verifyApplication');
    Route::get('/processApplication', 'TonerController@processAppl')->name('processApplication');
    Route::get('/submitpengesahan', 'TonerController@SubmitApproval')->name('submitpengesahan');
    Route::get('/pengesahan', 'TonerController@submitverifyAppl')->name('pengesahan');

});

Route::group(['prefix' => 'admin', 'namespace'=>'Admin'], function () {

    # Error pages should be shown without requiring login
    Route::get('404', function () {
        return view('admin/404');
    });
    Route::get('500', function () {
        return view('admin/500');
    });
    # Lock screen
    Route::get('{id}/lockscreen', 'UsersController@lockscreen')->name('lockscreen');
    Route::post('{id}/lockscreen', 'UsersController@postLockscreen')->name('lockscreen');
    # All basic routes defined here
    Route::get('login', 'AuthController@getSignin')->name('login');
    Route::get('signin', 'AuthController@getSignin')->name('signin');
    Route::post('signin', 'AuthController@postSignin')->name('postSignin');
    Route::post('signup', 'AuthController@postSignup')->name('admin.signup');
    Route::post('forgot-password', 'AuthController@postForgotPassword')->name('forgot-password');
    Route::get('login2', function () {
        return view('admin/login2');
    });


    # Register2
    Route::get('register2', function () {
        return view('admin/register2');
    });
    Route::post('register2', 'AuthController@postRegister2')->name('register2');

    # Forgot Password Confirmation
//    Route::get('forgot-password/{userId}/{passwordResetCode}', 'AuthController@getForgotPasswordConfirm')->name('forgot-password-confirm');
//    Route::post('forgot-password/{userId}/{passwordResetCode}', 'AuthController@getForgotPasswordConfirm');

    # Logout
    Route::get('logout', 'AuthController@getLogout')->name('logout');

    # Account Activation
    Route::get('activate/{userId}/{activationCode}', 'AuthController@getActivate')->name('activate');
});


Route::group(['prefix' => 'admin', 'middleware' => 'admin', 'as' => 'admin.'], function () {
    # GUI Crud Generator
    Route::get('generator_builder', 'JoshController@builder')->name('generator_builder');
    Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate');
    Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate');
    // Model checking
    Route::post('modelCheck', 'ModelcheckController@modelCheck');

    # Dashboard / Index
    Route::get('/', 'JoshController@showHome')->name('dashboard');

    # crop demo
    Route::post('crop_demo', 'JoshController@crop_demo')->name('crop_demo');
    //Log viewer routes
    Route::get('log_viewers', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@index')->name('log-viewers');
    Route::get('log_viewers/logs', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@listLogs')->name('log_viewers.logs');
    Route::delete('log_viewers/logs/delete', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@delete')->name('log_viewers.logs.delete');
    Route::get('log_viewers/logs/{date}', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@show')->name('log_viewers.logs.show');
    Route::get('log_viewers/logs/{date}/download', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@download')->name('log_viewers.logs.download');
    Route::get('log_viewers/logs/{date}/{level}', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@showByLevel')->name('log_viewers.logs.filter');
    Route::get('log_viewers/logs/{date}/{level}/search', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@search')->name('log_viewers.logs.search');
    Route::get('log_viewers/logcheck', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@logCheck')->name('log-viewers.logcheck');
    //end Log viewer
    # Activity log
    Route::get('activity_log/data', 'JoshController@activityLogData')->name('activity_log.data');
//    Route::get('/', 'JoshController@index')->name('index');
});

Route::group(['prefix' => 'admin','namespace'=>'Admin', 'middleware' => 'admin', 'as' => 'admin.'], function () {

    # User Management
    Route::group([ 'prefix' => 'users'], function () {
        Route::get('data', 'UsersController@data')->name('users.data');
        Route::get('{user}/delete', 'UsersController@destroy')->name('users.delete');
        Route::get('{user}/confirm-delete', 'UsersController@getModalDelete')->name('users.confirm-delete');
        Route::get('{user}/restore', 'UsersController@getRestore')->name('restore.user');
//        Route::post('{user}/passwordreset', 'UsersController@passwordreset')->name('passwordreset');
        Route::post('passwordreset', 'UsersController@passwordreset')->name('passwordreset');


    });
    Route::resource('users', 'UsersController');
/************ bulk import ****************************/
    Route::get('bulk_import_users', 'UsersController@import');
    Route::post('bulk_import_users', 'UsersController@importInsert');
    /****************bulk download **************************/
    Route::get('download_users/{type}', 'UsersController@downloadExcel');





    Route::get('deleted_users',['before' => 'Sentinel', 'uses' => 'UsersController@getDeletedUsers'])->name('deleted_users');

    // Email System
    Route::group(['prefix' => 'emails'], function () {
        Route::get('compose', 'EmailController@create');
        Route::post('compose', 'EmailController@store');
        Route::get('inbox', 'EmailController@inbox');
        Route::get('sent', 'EmailController@sent');
        Route::get('{email}', ['as' => 'emails.show', 'uses' => 'EmailController@show']);
        Route::get('{email}/reply', ['as' => 'emails.reply', 'uses' => 'EmailController@reply']);
        Route::get('{email}/forward', ['as' => 'emails.forward', 'uses' => 'EmailController@forward']);
    });
    Route::resource('emails', 'EmailController');

    # Group Management
    Route::group(['prefix' => 'groups'], function () {
        Route::get('{group}/delete', 'GroupsController@destroy')->name('groups.delete');
        Route::get('{group}/confirm-delete', 'GroupsController@getModalDelete')->name('groups.confirm-delete');
        Route::get('{group}/restore', 'GroupsController@getRestore')->name('groups.restore');
    });
    Route::resource('groups', 'GroupsController');

    /*routes for blog*/
    Route::group(['prefix' => 'blog'], function () {
        Route::get('{blog}/delete', 'BlogController@destroy')->name('blog.delete');
        Route::get('{blog}/confirm-delete', 'BlogController@getModalDelete')->name('blog.confirm-delete');
        Route::get('{blog}/restore', 'BlogController@restore')->name('blog.restore');
        Route::post('{blog}/storecomment', 'BlogController@storeComment')->name('storeComment');
    });
    Route::resource('blog', 'BlogController');

    /*routes for blog category*/
    Route::group(['prefix' => 'blogcategory'], function () {
        Route::get('{blogCategory}/delete', 'BlogCategoryController@destroy')->name('blogcategory.delete');
        Route::get('{blogCategory}/confirm-delete', 'BlogCategoryController@getModalDelete')->name('blogcategory.confirm-delete');
        Route::get('{blogCategory}/restore', 'BlogCategoryController@getRestore')->name('blogcategory.restore');
    });
    Route::resource('blogcategory', 'BlogCategoryController');
    /*routes for file*/
    Route::group(['prefix' => 'file'], function () {
        Route::post('create', 'FileController@store')->name('store');
        Route::post('createmulti', 'FileController@postFilesCreate')->name('postFilesCreate');
//        Route::delete('delete', 'FileController@delete')->name('delete');
        Route::get('{id}/delete', 'FileController@destroy')->name('file.delete');
        Route::get('data', 'FileController@data')->name('file.data');
        Route::get('{user}/delete', 'FileController@destroy')->name('users.delete');

    });

    /*routes for News*/
    Route::group(['prefix' => 'news'], function () {
        Route::get('data', 'NewsController@data')->name('news.data');
        Route::get('{news}/delete', 'NewsController@destroy')->name('news.delete');
        Route::get('{news}/confirm-delete', 'NewsController@getModalDelete')->name('news.confirm-delete');
    });
    Route::resource('news', 'NewsController');

    Route::get('crop_demo', function () {
        return redirect('admin/imagecropping');
    });


    /* laravel example routes */
    #Charts
    Route::get('laravel_chart', 'ChartsController@index')->name('laravel_chart');
    Route::get('database_chart', 'ChartsController@databaseCharts')->name('database_chart');

    # datatables
    Route::get('datatables', 'DataTablesController@index')->name('index');
    Route::get('datatables/data', 'DataTablesController@data')->name('datatables.data');

    # datatables
    Route::get('jtable/index', 'JtableController@index')->name('index');
    Route::post('jtable/store', 'JtableController@store')->name('store');
    Route::post('jtable/update', 'JtableController@update')->name('update');
    Route::post('jtable/delete', 'JtableController@destroy')->name('delete');



    # SelectFilter
    Route::get('selectfilter', 'SelectFilterController@index')->name('selectfilter');
    Route::get('selectfilter/find', 'SelectFilterController@filter')->name('selectfilter.find');
    Route::post('selectfilter/store', 'SelectFilterController@store')->name('selectfilter.store');

    # editable datatables
    Route::get('editable_datatables', 'EditableDataTablesController@index')->name('index');
    Route::get('editable_datatables/data', 'EditableDataTablesController@data')->name('editable_datatables.data');
    Route::get('editable_datatables1/data', 'EditableDataTablesController@data1')->name('editable_datatables.data1');
    Route::post('editable_datatables/create', 'EditableDataTablesController@store')->name('store');
    Route::post('editable_datatables/{id}/update', 'EditableDataTablesController@update')->name('update');
    Route::get('editable_datatables/{id}/delete', 'EditableDataTablesController@destroy')->name('editable_datatables.delete');

//    # custom datatables
    Route::get('custom_datatables', 'CustomDataTablesController@index')->name('index');
    Route::get('custom_datatables/sliderData', 'CustomDataTablesController@sliderData')->name('custom_datatables.sliderData');
    Route::get('custom_datatables/radioData', 'CustomDataTablesController@radioData')->name('custom_datatables.radioData');
    Route::get('custom_datatables/selectData', 'CustomDataTablesController@selectData')->name('custom_datatables.selectData');
    Route::get('custom_datatables/buttonData', 'CustomDataTablesController@buttonData')->name('custom_datatables.buttonData');
    Route::get('custom_datatables/totalData', 'CustomDataTablesController@totalData')->name('custom_datatables.totalData');

    //tasks section
    Route::post('task/create', 'TaskController@store')->name('store');
    Route::get('task/data', 'TaskController@data')->name('data');
    Route::post('task/{task}/edit', 'TaskController@update')->name('update');
    Route::post('task/{task}/delete', 'TaskController@delete')->name('delete');

});



# Remaining pages will be called from below controller method
# in real world scenario, you may be required to define all routes manually

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('{name?}', 'JoshController@showView');
});

#FrontEndController
Route::get('login', 'FrontEndController@getLogin')->name('login');
Route::post('login', 'FrontEndController@postLogin')->name('login');
Route::get('register', 'FrontEndController@getRegister')->name('register');
Route::post('register','FrontEndController@postRegister')->name('register');
Route::get('activate/{userId}/{activationCode}','FrontEndController@getActivate')->name('activate');
Route::get('forgot-password','FrontEndController@getForgotPassword')->name('forgot-password');
Route::post('forgot-password', 'FrontEndController@postForgotPassword');

#Social Logins
Route::get('facebook', 'Admin\FacebookAuthController@redirectToProvider');
Route::get('facebook/callback', 'Admin\FacebookAuthController@handleProviderCallback');

Route::get('linkedin', 'Admin\LinkedinAuthController@redirectToProvider');
Route::get('linkedin/callback', 'Admin\LinkedinAuthController@handleProviderCallback');

Route::get('google', 'Admin\GoogleAuthController@redirectToProvider');
Route::get('google/callback', 'Admin\GoogleAuthController@handleProviderCallback');


# Forgot Password Confirmation
Route::post('forgot-password/{userId}/{passwordResetCode}', 'FrontEndController@postForgotPasswordConfirm');
Route::get('forgot-password/{userId}/{passwordResetCode}', 'FrontEndController@getForgotPasswordConfirm')->name('forgot-password-confirm');
# My account display and update details
Route::group(['middleware' => 'user'], function () {
    Route::put('my-account', 'FrontEndController@update');
    Route::get('my-account', 'FrontEndController@myAccount')->name('my-account');
});
// Email System
Route::group(['prefix' => 'user_emails'], function () {
    Route::get('compose', 'UsersEmailController@create');
    Route::post('compose', 'UsersEmailController@store');
    Route::get('inbox', 'UsersEmailController@inbox');
    Route::get('sent', 'UsersEmailController@sent');
    Route::get('{email}', ['as' => 'user_emails.show', 'uses' => 'UsersEmailController@show']);
    Route::get('{email}/reply', ['as' => 'user_emails.reply', 'uses' => 'UsersEmailController@reply']);
    Route::get('{email}/forward', ['as' => 'user_emails.forward', 'uses' => 'UsersEmailController@forward']);
});
Route::resource('user_emails', 'UsersEmailController');
Route::get('logout', 'FrontEndController@getLogout')->name('logout');
# contact form
Route::post('contact', 'FrontEndController@postContact')->name('contact');

#frontend views
Route::get('/', ['as' => 'home', function () {
    return view('guest.index');
}]);

Route::get('blog','BlogController@index')->name('blog');
Route::get('blog/{slug}/tag', 'BlogController@getBlogTag');
Route::get('blogitem/{slug?}', 'BlogController@getBlog');
Route::post('blogitem/{blog}/comment', 'BlogController@storeComment');

//news
Route::get('news', 'NewsController@index')->name('news');
Route::get('news/{news}', 'NewsController@show')->name('news.show');

Route::get('{name?}', 'FrontEndController@showFrontEndView');
# End of frontend views
//Route::get('/KemaskiniAset/{id}', [ 'as' => 'admin.aset.KemaskiniAset', 'uses' => 'AsetController@KemaskiniAset']);
Route::get('/editorfilter', function () {
    return view("editorfilter");
});
Route::resource('customsearch', 'CustomSearchController');
Route::post ( '/filter', function (Request $request) {
   
     
    $aset_brand_id =Request::get ( 'aset_brand_id' );
    $aset_model_id =Request::get ( 'aset_model_id' );
    $receive_date =Request::get ( 'receive_date' );
    $aset_stor_supplier_id =Request::get ( 'aset_stor_supplier_id' );
    $aset_procurement_ty_id =Request::get ( 'aset_procurement_ty_id' );
    $aset_status_id =Request::get ( 'aset_status_id' );
    $brands = DB::table("aset_brands")->pluck("name", "id");
    $models = AsetModel::all();
    $suppliers = Supplier::all();
    $proc_types = Procurement_type::all();
    $asetStatus = AsetStatus::all();
    $staffs = Staff::all();
    
    if(!empty(Request::get('receive_date')))
      {
        
        $details = Printer::orderBy('created_at','DESC')
        ->join('hr_staffs', 'hr_staffs.id', '=', 'aset_printers.hr_staff_id')
        ->join('aset_models', 'aset_models.id', '=', 'aset_printers.aset_model_id')
        ->join('hr_units', 'hr_units.id', '=', 'hr_staffs.hr_unit_id')
        ->join('aset_brands', 'aset_brands.id', '=', 'aset_printers.aset_brand_id')
        ->select('aset_printers.*','hr_staffs.name','aset_models.name as m_name','aset_brands.name as b_name','hr_units.name as u_name')
        
        ->where( 'aset_printers.aset_brand_id', 'LIKE', '%' . $aset_brand_id . '%' )
        ->where( 'aset_printers.aset_model_id', 'LIKE', '%' . $aset_model_id . '%' )
        ->whereYear( 'aset_printers.receive_date', 'LIKE', '%' . $receive_date . '%' )
        ->where( 'aset_printers.aset_stor_supplier_id', 'LIKE', '%' . $aset_stor_supplier_id . '%' )
        ->where( 'aset_printers.aset_procurement_ty_id', 'LIKE', '%' . $aset_procurement_ty_id . '%' )
        ->where( 'aset_printers.aset_status_id', 'LIKE', '%' . $aset_status_id . '%' )
        ->get();
       
    }
    else
    {
        $details = Printer::orderBy('created_at','DESC')
        ->join('hr_staffs', 'hr_staffs.id', '=', 'aset_printers.hr_staff_id')
        ->join('aset_models', 'aset_models.id', '=', 'aset_printers.aset_model_id')
        ->join('hr_units', 'hr_units.id', '=', 'hr_staffs.hr_unit_id')
        ->join('aset_brands', 'aset_brands.id', '=', 'aset_printers.aset_brand_id')
        ->select('aset_printers.*','hr_staffs.name','aset_models.name as m_name','aset_brands.name as b_name','hr_units.name as u_name')
        
        ->where( 'aset_printers.aset_brand_id', 'LIKE', '%' . $aset_brand_id . '%' )
        ->where( 'aset_printers.aset_model_id', 'LIKE', '%' . $aset_model_id . '%' )
        //->whereYear( 'receive_date', 'LIKE', '%' . $receive_date . '%' )
        ->where( 'aset_printers.aset_stor_supplier_id', 'LIKE', '%' . $aset_stor_supplier_id . '%' )
        ->where( 'aset_printers.aset_procurement_ty_id', 'LIKE', '%' . $aset_procurement_ty_id . '%' )
        ->where( 'aset_printers.aset_status_id', 'LIKE', '%' . $aset_status_id . '%' )
        
        ->get();
        
      } 
     // return Response($details);
      //return datatables()->of($data)->make(true);
     //  dd($details);
    // return DataTables::of($details)->make(true);
   // return datatables()->of($details)->make(true);
       return view('admin.editorfilter', compact('details','brands','models','suppliers','proc_types','asetStatus','staffs'));
      // return DataTables::of($details)
        //    ->addColumn('edit', '<a class="edit" href="javascript:;">Edit</a>')
       //     ->addColumn('delete', '<a class="delete" href="#" data-target="#deleteConfirmModal" data-toggle="modal">Delete</a>')
       //     ->rawColumns(['edit','delete'])
       //   ->make(true);
} )->name('filter');