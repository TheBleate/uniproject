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
    function request(data, form)
    {

        form.disabled = true;

        let request = new XMLHttpRequest();


        request.onload = function () {

            if (this.status === 200) {
                if (!this.responseText.includes('ERROR')) {
                    vanillaToast.success(this.responseText);
                    form.reset();
                    setTimeout(function(){ location.reload(); }, 1000);
                } else {
                    vanillaToast.error(this.responseText.replace('ERROR: ', ''));
                }
            } else {
                vanillaToast.error(this.responseText.replace('ERROR: ', ''));
            }

            form.disabled = false;

        };

        request.open("post", "./php/controller.php");
        //request.setRequestHeader("Content-Type", form.enctype);
        request.send(data);


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
                switch (parseInt(item.dataset.crudaction)) {
                    case 1:
                        $('#modal-creacio').modal();
                        break;
                    case 2:
                        $('#modal-modificacio').modal();
                        $('#crud-modificar').data('crudtarget', item.dataset.crudtarget);
                        break;
                    case 3:
                        $('#modal-eliminacio').modal();
                        $('#crud-eliminar').data('crudtarget', item.dataset.crudtarget);
                        break;
                }

            });
        });

    }

    $('#crud-alta').on('submit', function(event) {
        event.preventDefault()
        let data = new FormData(this);
        data.append('tab', this.dataset.crud);
        data.append('action', "alta");
        request(data,this);
        return false;
    });

    $('#crud-modificar').on('submit', function(event) {
        event.preventDefault()
        let data = new FormData(this);
        data.append('tab', this.dataset.crud);
        data.append('action', "modificar");
        data.append('target', $(this).data('crudtarget'));
        request(data,this);
        return false;
    });

    $('#crud-eliminar').on('submit', function(event) {
        event.preventDefault()
        let data = new FormData(this);
        data.append('tab', this.dataset.crud);
        data.append('action', "eliminar");
        data.append('target', $(this).data('crudtarget'));
        request(data,this);
        return false;
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

(function(){"use strict";var e=function(){function e(){this.queue=new n,this.cancellationTokens=[],this.element=null}function i(e,t){e.element.toastBox.className=t.className||l["default"].className}function a(e,t,n,i){t||(t={});var a=t.fadeDuration||l["default"].fadeDuration,c=t.fadeInterval||l["default"].fadeInterval,s=Math.min(c/a,1),u=e.element.toastBox.style;return u.opacity=1,o(u,-s,c,n,function(){u.display="none",i&&i()}),e}function o(e,t,n,i,a){!function o(){if(i.isCancellationRequested)return e.opacity=0>t?0:1,void(a&&a());if(e.opacity=Number(e.opacity)+t,0>t&&e.opacity<0)a&&a();else if(t>0&&e.opacity>=1)a&&a();else{var l=setTimeout(function(){l=null,o()},n);i.register(function(){l&&(clearTimeout(l),l=null,a&&a())})}}()}var l={"default":{className:"default",fadeDuration:400,fadeInterval:16,duration:2e3,closeButton:!1,immediately:!1},success:{className:"success"},info:{className:"info"},warning:{className:"warning"},error:{className:"error",duration:3e3,closeButton:!0}};e.prototype.initElement=function(e){var t=document.createElement("div"),n=document.createElement("div"),a=document.createElement("div"),o=document.createElement("span");t.setAttribute("id","vanilla-toast-container"),n.setAttribute("id","vanilla-toast"),a.setAttribute("id","vanilla-toast-text"),o.setAttribute("id","vanilla-toast-close-button"),o.innerHTML="&#10006;",n.appendChild(a),n.appendChild(o),t.appendChild(n),e?document.getElementById(seletor).appendChild(containter):document.body.appendChild(t),this.element={container:t,toastBox:n,text:a,closeButton:o},i(this,l["default"])},e.prototype.cancel=function(){this.cancellationTokens.length&&this.cancellationTokens[0].cancel()},e.prototype.cancelAll=function(){for(var e=this.cancellationTokens.length,t=0;e>t;++t)!function(e){e.cancel()}(this.cancellationTokens[e-t-1])},e.prototype.show=function(e,n,c){var s=this;s.element||s.initElement(),n||(n={}),n.immediately&&s.cancelAll();var u=new t;return s.queue.enqueue(function(t){var r=n.fadeDuration||l["default"].fadeDuration,f=n.fadeInterval||l["default"].fadeInterval,d=Math.min(f/r,1),p=n.duration||l["default"].duration;s.element.closeButton.style.display=n.closeButton?"inline":"none",s.element.text.innerHTML=e;var m=s.element.toastBox.style;m.opacity=0,m.display="inline-block",i(s,n);var h=null,v=function(){h=null,s.element.toastBox.removeEventListener("click",y),a(s,n,u,function(){c&&c(),s.cancellationTokens.shift().dispose(),t()})},y=function(){h&&(clearTimeout(h),v())};o(m,d,f,u,function(){s.element.toastBox.addEventListener("click",y),u.isCancellationRequested?v():(h=setTimeout(v,p),u.register(function(){y()}))})}),s.cancellationTokens.push(u),s};for(var c in l)!function(t){e.prototype[t]=function(e,n,i){n||(n={});for(var a in l[t])void 0===n[a]&&(n[a]=l[t][a]);return this.show(e,n,i)}}(c);return e}(),t=function(){function e(){this.isCancellationRequested=!1,this.cancelCallbacks=[]}return e.prototype.cancel=function(){this.isCancellationRequested=!0;for(var e=this.cancelCallbacks.slice();e.length;)e.shift()()},e.prototype.register=function(e){this.cancelCallbacks.push(e)},e.prototype.dispose=function(){for(;this.cancelCallbacks.length;)this.cancelCallbacks.shift()},e}(),n=function(){function e(){this.queue=[],this.isExecuting=!1}function t(e){if(!e.isExecuting){var n=e.queue.shift();n&&(e.isExecuting=!0,n(function(){e.isExecuting=!1,t(e)}))}}return e.prototype.enqueue=function(e){this.queue.push(e),t(this)},e}();"undefined"!=typeof exports?("undefined"!=typeof module&&module.exports&&(exports=module.exports=new e),exports.vanillaToast=new e):this.vanillaToast=new e}).call(this);
