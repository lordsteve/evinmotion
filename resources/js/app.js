import './bootstrap';
import el from './const/elements';
import pathNames from './const/pathNames';
import pages from './pages';
import { initLoader } from './services/request';

initLoader();

switch (window.location.pathname) {
    case pathNames.HOME:
        pages.home(el);
        break;
    case pathNames.LOGIN:
        break;
    case pathNames.WHAT_IS_EV:
        pages.whatIsEv(el);
        break;
    case pathNames.PRODUCTS:
        pages.products(el);
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