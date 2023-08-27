import './bootstrap';
import pathNames from './const/pathNames';
import pages from './pages';

switch (window.location.pathname) {
    case pathNames.HOME:
        pages.home();
        break;
    case pathNames.LOGIN:
        break;
    case pathNames.WHAT_IS_EV:
        pages.whatIsEv();
        break;
    case pathNames.PRODUCTS:
        break;
    case pathNames.INCENTIVES:
        break;
    case pathNames.CONTACT_US:
        break;
    case pathNames.ABOUT_US:
        break;
    case pathNames.NEWS:
        break;
    default:
        break;
}