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
    const modal_triggers = document.querySelectorAll('.modal-trigger');
    const modal_creacio = document.getElementById('modal-creacio');

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

    if (modal_triggers) {
        modal_triggers.forEach(item => {
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


    $('#modal_creacio').on('submit', function() {


        //return false;
    });


    // *******************Andrei.H******************** //

    //object map
    //diccionari
    function map() {
        let mapa = new Map();
        mapa.set('Alumne', 'Denegat');
        mapa.set('Empresa', 'Denegat');
        mapa.set('Professor', 'Admes');
        // sayings.size; // 3
        //mapa.size();
        mapa.delete('Alumne');
        for (let [key, value] of mapa) {
            console.log(key + ' diu ' + value);

        }
        //sayings.clear();
        //sayings.size; // 0
    }
        function set()  {
        let primerSet = new Set();
        primerSet.add(1);
        primerSet.add('Mucho texto');
        primerSet.add('foo');

        primerSet.has(1);
        primerSet.delete('foo');
        //primerSet.size();

        for (let item of primerSet) {
            console.log(item);
        }

    }
    //promises
    /*
    const promise = new Promise((resolve, reject) => {
      const peticio = new XMLHttpRequest();

      peticio.open("GET", "https://randomuser.me/api/?inc=gender,nom,email&noinfo&format=PrettyJSON%22);
      peticio.onload = () => {
        if (peticio.status === 200) {
          resolve(peticio.response);

        } else {
          reject(Error(peticio.statusText));
        }
      };

      peticio.onerror = () => {
        reject(Error("Error omplint les dades."));
      };

      peticio.send();
    });

    console.log("Petició feta.");

    promise.then(
      data => {
        console.log("S'ha trobat informació. A continuació es generarà un usuari alistitutori:");
        console.log(data);
      },
      error => {
        console.log("Promise rebutjada.");
        console.log(error.message);
      }
    );
    //})();

    */
//classe animal
class Animal {
    constructor(name, weight) {
        this.name = name;
        this.weight = weight;
    }

    eat() {
        return `${this.name} is eating!`;
    }

    sleep() {
        return `${this.name} is going to sleep!`;
    }

    wakeUp() {
        return `${this.name} is waking up!`;
    }

}

class Gorilla extends Animal {
    constructor(name, weight) {
        super(name, weight);
    }

    climbTrees() {
        return `${this.name} is climbing trees!`;
    }

    poundChest() {
        return `${this.name} is pounding its chest!`;
    }

    showVigour() {
        return `${super.eat()} ${this.poundChest()}`;
    }

    dailyRoutine() {
        return `${super.wakeUp()} ${this.poundChest()} ${super.eat()} ${super.sleep()}`;
    }

}

function display(content) {
    console.log(content);
}

const gorilla = new Gorilla('George', '160Kg');
display(gorilla.poundChest());
display(gorilla.sleep());
display(gorilla.showVigour());
display(gorilla.dailyRoutine());

// **************************************************
//Array
var usersusers = [
    {nom: "AndreiH", tipus: "Alumne"},
    {nom: "AlexM", tipus: "Profe"},
    {nom: "JoanT", tipus: "Empleat"},
    {nom: "VladU", tipus: "Gerent"}
];
var usuarisAlumnes =  usersusers.filter(function(tipusUsuari) {
    return tipusUsuari.tipus == "Alumne";
});


//***************************************************
map();
set();
console.log(usuarisAlumnes);

})();
