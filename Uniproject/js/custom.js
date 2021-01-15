(function() {

    console.log("\n %c Projectus vx.x | Projecte unificat | http://projectus.cat \n",
                "color: white; background: #171b27; padding:5px 0; border-bottom: solid 2px #dd6b20;")

    /**
     * PHP Request Function
     *
     * Function that Allows communication between PHP and JavaScript
     *
     * @param 	{String} 				functioname The name of the function to be server side executed
     * @param 	{(Number|String)} 		arguments 	Any argument we wish to pass
     * @return 	{(Number|String|Array)}				Returns the server response
     */
    function request(functioname)
    {

    	let response;

    	$.ajax({
    		type: 'post',
    		url: './php/main.php',
    		dataType: 'json',
    		async: false,
    		data: {functioname: functioname, arguments: Array.prototype.slice.call(arguments, 1)},
    		success: function(data)
    		{

    			response = data;

    		},
    		error: function(request, status, error)
    		{

    			console.error('...');

    		}

    	});

    	return response;

    }

    /**
    *  Variables
    */
    const android = /(android)/i.test(navigator.userAgent);
    const banner = document.querySelector('.banner');
    const modals = document.querySelectorAll('.modal-btn');

    /**
    *  Listeners
    */
    if (banner) {
        window.addEventListener('scroll', function() {
            if (!android) {
                banner.style.backgroundPosition = '0 ' + (0.4 * window.scrollY) + 'px';
            }
        });
    }

    if (modals) {
        modals.forEach(item => {
            item.addEventListener('click', event => {
                //console.log(item.dataset.crudaction);
                switch (parseInt(item.dataset.crudaction)) {
                    case 1:
                        $('#modal-creacio').modal();
                        break;
                    case 2:
                        $('#modal-modificacio').modal();
                        break;
                    case 3:
                        $('#modal-eliminacio').modal();
                        break;
                }

            });
        });

    }
})();
