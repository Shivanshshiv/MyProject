jQuery(document).ready(function(){

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current){
        jQuery('#show-previous-image, #show-next-image').show();
        if(counter_max == counter_current){
            jQuery('#show-next-image').hide();
        } else if (counter_current == 1){
            jQuery('#show-previous-image').hide();
        }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr){
        var current_image,
            selector,
            counter = 0;

        jQuery('#show-next-image, #show-previous-image').click(function(){
            if(jQuery(this).attr('id') == 'show-previous-image'){
                current_image--;
            } else {
                current_image++;
            }

            selector = jQuery('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
        });

        function updateGallery(selector) {
            var $sel = selector;
            current_image = $sel.data('image-id');
            jQuery('#image-gallery-caption').text($sel.data('caption'));
            jQuery('#image-gallery-title').text($sel.data('title'));
            jQuery('#image-gallery-image').attr('src', $sel.data('image'));
            disableButtons(counter, $sel.data('image-id'));
        }

        if(setIDs == true){
            jQuery('[data-image-id]').each(function(){
                counter++;
                jQuery(this).attr('data-image-id',counter);
            });
        }
        jQuery(setClickAttr).on('click',function(){
            updateGallery(jQuery(this));
        });
    }
});