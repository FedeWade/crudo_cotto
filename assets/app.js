import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';

import './styles/home.css';

import 'bootstrap/dist/css/bootstrap.min.css';

import './bootstrap.js'

import 'bootstrap-icons/font/bootstrap-icons.min.css';

// Initialization for ES Users
import { Tab, initMDB } from "mdb-ui-kit";

initMDB({ Tab });

console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');
