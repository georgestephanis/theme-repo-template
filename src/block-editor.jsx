import { __ } from '@wordpress/i18n';
import domReady from '@wordpress/dom-ready';

domReady(() => {
    console.log( __( 'In the block editor.' ) );
});
