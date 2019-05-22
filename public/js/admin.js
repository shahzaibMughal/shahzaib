$('document').ready(function(){





    /******************* Input file
     ***************************************************/
    ( function ( document, window, index )
    {
        var inputs = document.querySelectorAll( '.inputfile' );
        Array.prototype.forEach.call( inputs, function( input )
        {
            var label	 = input.nextElementSibling,
                labelVal = label.innerHTML;

            input.addEventListener( 'change', function( e )
            {
                var fileName = '';
                if( this.files && this.files.length > 1 )
                    fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
                else
                    fileName = e.target.value.split( '\\' ).pop();

                if( fileName )
                    label.querySelector( 'span' ).innerHTML = fileName;
                else
                    label.innerHTML = labelVal;
            });

            // Firefox bug fix
            input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
            input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
        });
    }( document, window, 0 ));
















    /******************* Add new field for tech name input
     ***************************************************/

    const TECH_INPUT_CONTAINER = $('#project_tech_input_container');
    const ADD_TECH_BTN = $('#addTech');

    ADD_TECH_BTN.click(function(e){
        e.preventDefault();
        var input_field = '<input class="tech" name="projectTech[]" type="text" placeholder="Tech name">'
        TECH_INPUT_CONTAINER.append(input_field);
    });


});