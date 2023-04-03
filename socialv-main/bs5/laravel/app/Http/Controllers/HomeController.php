<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
     * Dashboard Pages Routes
     */
    public function index(Request $request)
    {
        return view('dashboards.index');
    }
    public function newsfeed(Request $request)
    {
        return view('dashboards.newsfeed');
    }
    
    public function profile(Request $request)
    {
        return view('dashboards.profile');
    }
    public function profileedit(Request $request)
    {
        return view('dashboards.profileedit');
    }
    public function accountsetting(Request $request)
    {
        return view('dashboards.accountsetting');
    }
    public function privacysetting(Request $request)
    {
        return view('dashboards.privacysetting');
    }




    public function friendlist(Request $request)
    {

        return view('dashboards.friendlist');
    }

    public function group(Request $request)
    {
        return view('dashboards.group');
    }
    public function groupdetail(Request $request)
    {
        return view('dashboards.groupdetail');
    }
    public function proimg(Request $request)
    {
        return view('dashboards.proimg');
    }
    public function provideos(Request $request)
    {
        return view('dashboards.provideos');
    }
    public function profilevent(Request $request)
    {
        return view('dashboards.profilevent');
    }
    public function profilebadges(Request $request)
    {
        return view('dashboards.profilebadges');
    }
    public function profileforum(Request $request)
    {
        return view('dashboards.profileforum');
    }
    public function notification(Request $request)
    {
        return view('dashboards.notification');
    }
    public function file(Request $request)
    {
        return view('dashboards.file');
    }
    public function friendrequest(Request $request)
    {
        return view('dashboards.friendrequest');
    }
    public function chat(Request $request)
    {
        return view('dashboards.chat');
    }
    public function todo(Request $request)
    {
        return view('dashboards.todo');
    }
    
    public function calender(Request $request)
    {
        return view('dashboards.calender');
    }
    public function birthday(Request $request)
    {
        return view('dashboards.birthday');
    }
    public function weather(Request $request)
    {
        return view('dashboards.weather');
    }
    public function music(Request $request)
    {
        return view('dashboards.music');
    }
    public function friendprofile(Request $request)
    {
        return view('dashboards.friendprofile');
    }
    /*layout*/
    public function withoutrightsidebar(Request $request)
    {
        return view('dashboards.withoutrightsidebar');
    }
    public function withoutleftsidebar(Request $request)
    {
        return view('dashboards.withoutleftsidebar');
    }
    
    /*blog pages*/
    public function bloggrid()
    {
        return view('blog.bloggrid');
    }
    public function bloglist()
    {
        return view('blog.bloglist');
    }
    public function blogdetail()
    {
        return view('blog.blogdetail');
    }

    /*market paages*/
    public function market1()
    {
        return view('market.market1');
    }
    public function market2()
    {
        return view('market.market2');
    }
     /*profile paages*/
     public function profile1()
     {
         return view('profile.profile1');
     }
     public function profile2()
     {
         return view('profile.profile2');
     }
     public function profile3()
     {
         return view('profile.profile3');
     }

/*store pages*/
    public function grid(Request $request)
    {
        return view('store.grid');
    }
    public function list(Request $request)
    {
        return view('store.list');
    }
    public function detail(Request $request)
    {
        return view('store.detail');
    }
    public function checkout(Request $request)
    {
        return view('store.checkout');
    } 
    
/*email pages*/
    public function email(Request $request)
    {
        return view('mailbox.email');
    }
    public function emailcompose(Request $request)
    {
        return view('mailbox.emailcompose');
    }
/*form pages*/
    public function formcheckbox(Request $request)
    {
        return view('ui.formcheckbox');
    }
    public function formlayout(Request $request)
    {
        return view('ui.formlayout');
    }
    public function formradio(Request $request)
    {
        return view('ui.formradio');
    }
    public function formswitch(Request $request)
    {
        return view('ui.formswitch');
    }
    public function formvalidation(Request $request)
    {
        return view('ui.formvalidation');
    }
    /*table pages*/ 
    public function tablebasic(Request $request)
    {
        return view('ui.tablebasic');
    }
    public function datatable(Request $request)
    {
        return view('ui.datatable');
    }
    public function tableedit(Request $request)
    {
        return view('ui.tableedit');
    }
    /*form pagees*/ 
    public function formwizard(Request $request)
    {
        return view('ui.formwizard');
    }
    public function formwizardvalidate(Request $request)
    {
        return view('ui.formwizardvalidate');
    }
    public function formwizardvertical(Request $request)
    {
        return view('ui.formwizardvertical');
    }
    /*icon pages*/ 
    public function iconfontawsome(Request $request)
    {
        return view('ui.iconfontawsome');
    }
    public function iconlineawsome(Request $request)
    {
        return view('ui.iconlineawsome');
    }
    public function iconremixon(Request $request)
    {
        return view('ui.iconremixon');
    }

    /*pages*/
    public function signin(Request $request)
    {
        return view('pages.signin');
    }
    public function signup(Request $request)
    {
        return view('pages.signup');
    }
    public function pagerecover(Request $request)
    {
        return view('pages.pagerecover');
    }
    public function pageconfirmail(Request $request)
    {
        return view('pages.pageconfirmail');
    }
    public function lockscreen(Request $request)
    {
        return view('pages.lockscreen');
    }
    /*extrapage*/ 
    public function timeline(Request $request)
    {
        return view('pages.timeline');
    }
    public function invoice(Request $request)
    {
        return view('pages.invoice');
    }
    public function blankpage(Request $request)
    {
        return view('pages.blankpage');
    }
    public function error(Request $request)
    {
        return view('pages.error');
    }
    public function error500(Request $request)
    {
        return view('pages.error500');
    }
    public function pricing(Request $request)
    {
        return view('pages.pricing');
    }
    public function pricingone(Request $request)
    {
        return view('pages.pricingone');
    }
    public function maintenance(Request $request)
    {
        return view('pages.maintenance');
    }
    public function comingsoon(Request $request)
    {
        return view('pages.comingsoon');
    }
    public function faq(Request $request)
    {
        return view('pages.faq');
    }



    


    


    
    
    /*
     * UI Page Routes
     */

    public function uigrid()
    {
        return view('ui.uigrid');
    }

    public function uitabs()
    {
        return view('ui.uitabs');
    }

    public function uicard()
    {
        return view('ui.uicard');
    }

    public function uimodal()
    {
        return view('ui.uimodal');
    }

    public function uialert()
    {
        return view('ui.uialert');
    }

    public function uibadges()
    {
        return view('ui.uibadges');
    }

    

    public function uiimages()
    {
        return view('ui.uiimages');
    }

    

    public function uibutton()
    {
        return view('ui.uibutton');
    }

    public function uicarousel()
    {
        return view('ui.uicarousel');
    }

    public function uipopovers()
    {
        return view('ui.uipopovers');
    }

    public function uitooltips()
    {
        return view('ui.uitooltips');
    }
    public function uicolor()
    {
        return view('ui.uicolor');
    }


    

    public function uibreadcrumb()
    {
        return view('ui.uibreadcrumb');
    }

    public function uilistitems()
    {
        return view('ui.uilistitems');
    }

    public function uipagination()
    {
        return view('ui.uipagination');
    }

    public function uitypography()
    {
        return view('ui.uitypography');
    }

    public function uimedia()
    {
        return view('ui.uimedia');
    }

    public function uiprogressbars()
    {
        return view('ui.uiprogressbars');
    }

    
    public function uinotification()
    {
        return view('ui.uinotification');
    }

    public function uiemvideo()
    {
        return view('ui.uiemvideo');
    }

    

       /*footer pages */
    public function privacypolicy()
    {
        return view('footer.privacypolicy');
    }

    public function termsofservice()
    {
        return view('footer.termsofservice');
    }
}
