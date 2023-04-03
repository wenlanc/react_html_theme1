<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('dashboards.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('index');

// Dashboard Routes
  Route::get('index', [HomeController::class, 'index'])->name('index');
  Route::get('newsfeed', [HomeController::class, 'newsfeed'])->name('newsfeed');
  Route::get('profile', [HomeController::class, 'profile'])->name('profile');
  Route::get('profileedit', [HomeController::class, 'profileedit'])->name('profileedit');
  Route::get('accountsetting', [HomeController::class, 'accountsetting'])->name('accountsetting');
  Route::get('privacysetting', [HomeController::class, 'privacysetting'])->name('privacysetting');
  Route::get('friendlist', [HomeController::class, 'friendlist'])->name('friendlist');
  Route::get('friendprofile', [HomeController::class, 'friendprofile'])->name('friendprofile');
  Route::get('group', [HomeController::class, 'group'])->name('group');
  Route::get('groupdetail', [HomeController::class, 'groupdetail'])->name('groupdetail');
  Route::get('proimg', [HomeController::class, 'proimg'])->name('proimg');
  Route::get('provideos', [HomeController::class, 'provideos'])->name('provideos');
  Route::get('profilevent', [HomeController::class, 'profilevent'])->name('profilevent');
  Route::get('profilebadges', [HomeController::class, 'profilebadges'])->name('profilebadges');
  Route::get('profileforum', [HomeController::class, 'profileforum'])->name('profileforum');
  Route::get('notification', [HomeController::class, 'notification'])->name('notification');
  Route::get('file', [HomeController::class, 'file'])->name('file');
  Route::get('friendrequest', [HomeController::class, 'friendrequest'])->name('friendrequest');
  Route::get('chat', [HomeController::class, 'chat'])->name('chat');
  Route::get('todo', [HomeController::class, 'todo'])->name('todo');
  Route::get('calender', [HomeController::class, 'calender'])->name('calender');
  Route::get('birthday', [HomeController::class, 'birthday'])->name('birthday');
  Route::get('weather', [HomeController::class, 'weather'])->name('weather');
  Route::get('music', [HomeController::class, 'music'])->name('music');
  Route::get('grid', [HomeController::class, 'grid'])->name('grid');
  Route::get('list', [HomeController::class, 'list'])->name('list');
  Route::get('detail', [HomeController::class, 'detail'])->name('detail');
  Route::get('checkout', [HomeController::class, 'checkout'])->name('checkout');
  Route::get('email', [HomeController::class, 'email'])->name('email');
  Route::get('emailcompose', [HomeController::class, 'emailcompose'])->name('emailcompose');
  Route::get('uielements', [HomeController::class, 'uielements'])->name('uielements');
  Route::get('uikit', [HomeController::class, 'uikit'])->name('uikit');
  Route::get('uicolor', [HomeController::class, 'uicolor'])->name('uicolor');
  Route::get('uitypo', [HomeController::class, 'uitypo'])->name('uitypo');
  Route::get('uialert', [HomeController::class, 'uialert'])->name('uialert');
  Route::get('uibadges', [HomeController::class, 'uibadges'])->name('uibadges');
  Route::get('uibreadcrumb', [HomeController::class, 'uibreadcrumb'])->name('uibreadcrumb');
  Route::get('uibutton', [HomeController::class, 'uibutton'])->name('uibutton');
  Route::get('uicard', [HomeController::class, 'uicard'])->name('uicard');
  Route::get('uicarousel', [HomeController::class, 'uicarousel'])->name('uicarousel');
  Route::get('uiemvideo', [HomeController::class, 'uiemvideo'])->name('uiemvideo');
  Route::get('uigrid', [HomeController::class, 'uigrid'])->name('uigrid');
  Route::get('uimages', [HomeController::class, 'uimages'])->name('uimages');
  Route::get('uilistitems', [HomeController::class, 'uilistitems'])->name('uilistitems');
  Route::get('uimodal', [HomeController::class, 'uimodal'])->name('uimodal');
  Route::get('uinotification', [HomeController::class, 'uinotification'])->name('uinotification');
  Route::get('uipagation', [HomeController::class, 'uipagation'])->name('uipagation');
  Route::get('uipopovers', [HomeController::class, 'uipopovers'])->name('uipopovers');
  Route::get('uiprogressbars', [HomeController::class, 'uiprogressbars'])->name('uiprogressbars');
  Route::get('uitabs', [HomeController::class, 'uitabs'])->name('uitabs');
  Route::get('uitooltips', [HomeController::class, 'uitooltips'])->name('uitooltips');
  Route::get('form', [HomeController::class, 'form'])->name('form');
  Route::get('formlayout', [HomeController::class, 'formlayout'])->name('formlayout');
  Route::get('formvalidation', [HomeController::class, 'formvalidation'])->name('formvalidation');
  Route::get('formswitch', [HomeController::class, 'formswitch'])->name('formswitch');
  Route::get('formcheckbox', [HomeController::class, 'formcheckbox'])->name('formcheckbox');
  Route::get('formradio', [HomeController::class, 'formradio'])->name('formradio');
  Route::get('wizard', [HomeController::class, 'wizard'])->name('wizard');
  Route::get('formwizard', [HomeController::class, 'formwizard'])->name('formwizard');
  Route::get('formwizardvalidate', [HomeController::class, 'formwizardvalidate'])->name('formwizardvalidate');
  Route::get('formwizardvertical', [HomeController::class, 'formwizardvertical'])->name('formwizardvertical'); 
  Route::get('table', [HomeController::class, 'table'])->name('table');
  Route::get('tablebasic', [HomeController::class, 'tablebasic'])->name('tablebasic');
  Route::get('datatable', [HomeController::class, 'datatable'])->name('datatable');
  Route::get('tableedit', [HomeController::class, 'tableedit'])->name('tableedit');
  Route::get('icon', [HomeController::class, 'icon'])->name('icon');
  Route::get('iconfontawsome', [HomeController::class, 'iconfontawsome'])->name('iconfontawsome');
  Route::get('iconlineawsome', [HomeController::class, 'iconlineawsome'])->name('iconlineawsome');
  Route::get('iconremixon', [HomeController::class, 'iconremixon'])->name('iconremixon');
  Route::get('page', [HomeController::class, 'page'])->name('page');
  Route::get('authenticate', [HomeController::class, 'authenticate'])->name('authenticate');
  Route::get('signin', [HomeController::class, 'signin'])->name('signin');
  Route::get('signup', [HomeController::class, 'signup'])->name('signup');
  Route::get('pagerecover', [HomeController::class, 'pagerecover'])->name('pagerecover');
  Route::get('pageconfirmail', [HomeController::class, 'pageconfirmail'])->name('pageconfirmail');
  Route::get('lockscreen', [HomeController::class, 'extrapage'])->name('extrapage');
  Route::get('extrapage', [HomeController::class, 'lockscreen'])->name('lockscreen');
  Route::get('timeline', [HomeController::class, 'timeline'])->name('timeline');
  Route::get('invoice', [HomeController::class, 'invoice'])->name('invoice');
  Route::get('blankpage', [HomeController::class, 'blankpage'])->name('blankpage');
  Route::get('error', [HomeController::class, 'error'])->name('error');
  Route::get('error500', [HomeController::class, 'error500'])->name('error500');
  Route::get('pricing', [HomeController::class, 'pricing'])->name('pricing');
  Route::get('pricingone', [HomeController::class, 'pricingone'])->name('pricingone');
  Route::get('maintenance', [HomeController::class, 'maintenance'])->name('maintenance');
  Route::get('comingsoon', [HomeController::class, 'comingsoon'])->name('comingsoon');
  Route::get('faq', [HomeController::class, 'faq'])->name('faq');
  Route::get('withoutrightsidebar', [HomeController::class, 'withoutrightsidebar'])->name('withoutrightsidebar');
  Route::get('withoutleftsidebar', [HomeController::class, 'withoutleftsidebar'])->name('withoutleftsidebar');
 


  //blog page route
  Route::group(['prefix' => 'blog'], function() {
  Route::get('bloggrid', [HomeController::class, 'bloggrid'])->name('blog.bloggrid');
  Route::get('bloglist', [HomeController::class, 'bloglist'])->name('blog.bloglist');
  Route::get('blogdetail', [HomeController::class, 'blogdetail'])->name('blog.blogdetail');
  });
    
  
  
  

  //store page route
  Route::group(['prefix' => 'store'], function() {
    Route::get('grid', [HomeController::class, 'grid'])->name('store.grid');
    Route::get('list', [HomeController::class, 'list'])->name('store.list');
    Route::get('detail', [HomeController::class, 'detail'])->name('store.detail');
    Route::get('checkout', [HomeController::class, 'checkout'])->name('store.checkout');
    });

  //mail pages route
  Route::group(['prefix' => 'mailbox'], function() {
    Route::get('email', [HomeController::class, 'email'])->name('mailbox.email');
    Route::get('emailcompose', [HomeController::class, 'emailcompose'])->name('mailbox.emailcompose');
  });
  //market pages route
  Route::group(['prefix' => 'market'], function() {
    Route::get('market1', [HomeController::class, 'market1'])->name('market.market1');
    Route::get('market2', [HomeController::class, 'market2'])->name('market.market2');
  });
  Route::group(['prefix' => 'profile'], function() {
    Route::get('profile1', [HomeController::class, 'profile1'])->name('profile.profile1');
    Route::get('profile2', [HomeController::class, 'profile2'])->name('profile.profile2');
    Route::get('profile3', [HomeController::class, 'profile3'])->name('profile.profile3');
  });

  //ui pages
  Route::group(['prefix' => 'ui'], function() {
    //form pages
    Route::get('formcheckbox', [HomeController::class, 'formcheckbox'])->name('ui.formcheckbox');
    Route::get('formlayout', [HomeController::class, 'formlayout'])->name('ui.formlayout');
    Route::get('formradio', [HomeController::class, 'formradio'])->name('ui.formradio');
    Route::get('formswitch', [HomeController::class, 'formswitch'])->name('ui.formswitch');
    Route::get('formvalidation', [HomeController::class, 'formvalidation'])->name('ui.formvalidation');

    //wizard pages
    Route::get('formwizard', [HomeController::class, 'formwizard'])->name('ui.formwizard');
    Route::get('formwizardvalidate', [HomeController::class, 'formwizardvalidate'])->name('ui.formwizardvalidate');
    Route::get('formwizardvertical', [HomeController::class, 'formwizardvertical'])->name('ui.formwizardvertical');
    
    //table pages
    Route::get('tablebasic', [HomeController::class, 'tablebasic'])->name('ui.tablebasic');
    Route::get('datatable', [HomeController::class, 'datatable'])->name('ui.datatable');
    Route::get('tableedit', [HomeController::class, 'tableedit'])->name('ui.tableedit');

    //icon pages
    Route::get('iconfontawsome', [HomeController::class, 'iconfontawsome'])->name('ui.iconfontawsome');
    Route::get('iconlineawsome', [HomeController::class, 'iconlineawsome'])->name('ui.iconlineawsome');
    Route::get('iconremixon', [HomeController::class, 'iconremixon'])->name('ui.iconremixon');

    //uipages
    Route::get('uitypography', [HomeController::class, 'uitypography'])->name('ui.uitypography');
    Route::get('uialert', [HomeController::class, 'uialert'])->name('ui.uialert');
    Route::get('uicolor', [HomeController::class, 'uicolor'])->name('ui.uicolor');
    Route::get('uibadges', [HomeController::class, 'uibadges'])->name('ui.uibadges');
    Route::get('uibreadcrumb', [HomeController::class, 'uibreadcrumb'])->name('ui.uibreadcrumb');
    Route::get('uibutton', [HomeController::class, 'uibutton'])->name('ui.uibutton');
    Route::get('uicard', [HomeController::class, 'uicard'])->name('ui.uicard');
    Route::get('uicarousel', [HomeController::class, 'uicarousel'])->name('ui.uicarousel');
    Route::get('uigrid', [HomeController::class, 'uigrid'])->name('ui.uigrid');
    Route::get('uiemvideo', [HomeController::class, 'uiemvideo'])->name('ui.uiemvideo');
    Route::get('uiimages', [HomeController::class, 'uiimages'])->name('ui.uiimages');
    Route::get('uilistitems', [HomeController::class, 'uilistitems'])->name('ui.uilistitems');
    Route::get('uimodal', [HomeController::class, 'uimodal'])->name('ui.uimodal');
    Route::get('uinotification', [HomeController::class, 'uinotification'])->name('ui.uinotification');
    Route::get('uipagination', [HomeController::class, 'uipagination'])->name('ui.uipagination');
    Route::get('uipopovers', [HomeController::class, 'uipopovers'])->name('ui.uipopovers');
    Route::get('uiprogressbars', [HomeController::class, 'uiprogressbars'])->name('ui.uiprogressbars');
    Route::get('uitabs', [HomeController::class, 'uitabs'])->name('ui.uitabs');
    Route::get('uitooltips', [HomeController::class, 'uitooltips'])->name('ui.uitooltips');
  });

  //pages
  Route::group(['prefix' => 'pages'], function() {
  //page
  Route::get('signin', [HomeController::class, 'signin'])->name('pages.signin');
  Route::get('signup', [HomeController::class, 'signup'])->name('pages.signup');
  Route::get('pagerecover', [HomeController::class, 'pagerecover'])->name('pages.pagerecover');
  Route::get('pageconfirmail', [HomeController::class, 'pageconfirmail'])->name('pages.pageconfirmail');
  Route::get('lockscreen', [HomeController::class, 'lockscreen'])->name('pages.lockscreen');

  //extrapage
  Route::get('timeline', [HomeController::class, 'timeline'])->name('pages.timeline');
  Route::get('invoice', [HomeController::class, 'invoice'])->name('pages.invoice');
  Route::get('blankpage', [HomeController::class, 'blankpage'])->name('pages.blankpage');
  Route::get('error', [HomeController::class, 'error'])->name('pages.error');
  Route::get('error500', [HomeController::class, 'error500'])->name('pages.error500');
  Route::get('pricing', [HomeController::class, 'pricing'])->name('pages.pricing');
  Route::get('pricingone', [HomeController::class, 'pricingone'])->name('pages.pricingone');
  Route::get('maintenance', [HomeController::class, 'maintenance'])->name('pages.maintenance');
  Route::get('comingsoon', [HomeController::class, 'comingsoon'])->name('pages.comingsoon');
  Route::get('faq', [HomeController::class, 'faq'])->name('pages.faq');


  });

  //footer pages
  Route::group(['prefix' => 'footer'], function() {
  Route::get('privacypolicy', [HomeController::class, 'privacypolicy'])->name('footer.privacypolicy');
  Route::get('termsofservice', [HomeController::class, 'termsofservice'])->name('footer.termsofservice');
  });








  



  

