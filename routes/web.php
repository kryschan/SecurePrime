<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\logControl;
use App\Http\Controllers\forAddingControl;
use App\Http\Controllers\forEditingControl;
use App\Http\Controllers\forDeletingControl;
use App\Http\Controllers\forNavigationControl;
use App\Http\Controllers\forListingControl;
use App\Http\Controllers\forCardGenerator;
use App\Http\Controllers\qrScanner;
use App\Http\Controllers\repMeminfo;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/EstCredentials', function () {
    return view('estLogin');
});

//LANDING PAGE LINK
Route::controller(logControl::class)->group(function(){

    //format Route::get('kahit anong pangalan', 'function sa controller')->name('pangalan ng file sa view')
    Route::get('Credentials', 'loginFuction')->name('login');
    Route::get('Fire', 'fireIn')->name('fireinsurance');
    Route::get('Motor', 'motorCar')->name('motorcarinsurance');
    Route::get('Engineer', 'engInsure')->name('engineeringinsurance');
    Route::get('Marine', 'marine')->name('marineandaviationinsurance');
    Route::get('Liability', 'liability')->name('liabilityinsurance');
    Route::get('Bonds', 'bondsFuc')->name('bonds');
    Route::get('Quotation', 'quote')->name('quote');
    Route::get('About', 'aboutUs')->name('about');
    Route::get('News', 'news')->name('news');
    Route::get('Board of Directors', 'officers')->name('officers');
    Route::get('Certificates', 'certificates')->name('certificates');
    Route::get('ClaimsGPA', 'claimsGpa')->name('claimsgpa');
    Route::get('ClaimsSMotor', 'claimsMotor')->name('claimsmotor');
    Route::get('Home', 'homePage')->name('index');
    Route::get('Contact', 'contactUs')->name('contact');
    Route::post('Login', 'logVal');
    Route::post('Estalog', 'estLog');
    Route::get('logs', 'logout')->name("logout");
    Route::get('Establishement', 'est')->name("estas");
    Route::get('Partners', 'part')->name("parts");
    Route::get('Client', 'client')->name("person");

});

  





//format Route::get('kahit anong pangalan', 'function sa controller')->name('pangalan ng file sa view')
    //kapag may list ng table Route::get('kahit anong pangalan', 'function sa controller')->name('pangalan ng link sa navigation')

//Adding Record
Route::controller(forAddingControl::class)->group(function(){
   
    Route::POST('AddClient','cInfo');
    Route::post('userAddPro', 'userPros');
    Route::post('addEstabPro', 'estabPro');
    Route::POST('qrscan','qrPost');
    Route::post('inquire','inquiry');
    Route::post('Company', 'compAdd');
    Route::POST('/additionalMem/{ref}', 'additionalMem')->name("additionalMem");

});


//QrCode Scanner
Route::controller(qrScanner::class)->group(function(){
   
    Route::POST('qrscan','qrPost');

});



//Editing Record
Route::controller(forEditingControl::class)->group(function(){
    Route::post('/actionUpdate/{ref}', 'cEdit');
    Route::post("/estEdPro/{id}","estEditPro");
    Route::post("/userEdPro/{id}", 'uEdPro');
    Route::post("/saveComp/{ref}", "edComp");
    Route::post("svEstUser","edestuser");

});





//Deleting Record
Route::controller(forDeletingControl::class)->group(function(){
    
    Route::delete("clientDel/{id}", 'delClient');
    Route::delete("estDel/{id}", 'estDelPro');
    Route::delete("delMemComp/{comId}", "comMemDel");
   
});



//Selecting Record
Route::controller(forListingControl::class)->group(function(){
    Route::get('editement', 'editClient')->name('editClients');
    Route::get('formfire', 'formFire')->name('form_fire');
    Route::get('formData','joinList')->name("fireData");
    Route::get('usersList','selUserlist')->name('userList');
    Route::get('clientEdits/{ref}', 'editClient');
    Route::get('AddNewClient', 'insList')->name('clientAdd');
    Route::get('inquiry', 'inqList')->name('inquiry');
    Route::get('clientView/{ref}', 'vClient')->name('clientView');
    Route::get('establishment/', 'estab')->name('establishment');
    Route::get('estEdit/{est}','estSel')->name('estEdit');
    Route::get("qrList", "qrScanList")->name("qrList");
    Route::get("estTrans", "estDis")->name("estTrans");
    Route::get("userupdate/{uid}", 'uEd')->name("userupdate");
    Route::get("SecurePowerCard", 'spc')->name("pCard");
    Route::get("CompanyMember", 'comMem')->name("comMem");
    Route::get("CompanyInfo/{ref}", 'comDeInfo')->name('CompanyInfo');
    Route::get("GroupEdit/{ref}", "grpEd")->name("GroupEdit");
    Route::get("/addMember/{key}", "addNMemList")->name("addMember");
});



//Link navigation
Route::controller(forNavigationControl::class)->group(function(){
    Route::get('addUser', 'userAdd')->name("addUser");
    Route::get('userList', 'userLink')->name("UserList");
    Route::get('dash', 'dashboard')->name('dashboard');
    Route::get('addEstab', 'estabAdd')->name('addEstab');
    Route::get('EstDash', 'estlink')->name('estDash');
    Route::get('QrScanner', 'qrLinks')->name("QrScanner");
    Route::get('addCompany', 'addcomp')->name("addcom");
    Route::get("repMemCondition", "repMemCon")->name('repMemCondition');
    Route::get("repCardReleased", "repCardCom")->name('repCardReleased');
    Route::get("repEstablishement", "repEstCon")->name('repEstablishement');
    Route::get("agent", "agentLink")->name("agent");
    Route::get('AccountSettings', 'accSet')->name("AccountSettings");
    Route::get('SecurePowerCard', 'securepowercards')->name("securepowercard");
    Route::get('GroupLife', 'grouplifes')->name("grouplife");
});



Route::controller(forCardGenerator::class)->group(function(){
   
    Route::get('/PowerCard/{ref}','idCat');
    Route::match(['get', 'post'], '/prevCard/{ref}', 'idcard');
    Route::get('/vCard/{pwc}', 'cardCode');
   
    
});


Route::controller(repMeminfo::class)->group(function(){
    Route::post('repMem', "repMemIn");
    Route::post('repCard', "repCardIn");
    Route::post('repEst', "repEstIn");
    
});