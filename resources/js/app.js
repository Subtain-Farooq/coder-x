//import './bootstrap';

import Alpine from 'alpinejs'
import intersect from '@alpinejs/intersect'
import collapse from '@alpinejs/collapse'
Alpine.plugin([intersect, collapse])
//Alpine.plugin(collapse)
window.Alpine = Alpine
Alpine.start()

