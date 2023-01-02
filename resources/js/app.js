import './bootstrap';

import Alpine from 'alpinejs';
import $ from "jquery";
import toastr from "toastr";

window.toastr = toastr;
window.Alpine = Alpine;
window.$ = $;
Alpine.start();
