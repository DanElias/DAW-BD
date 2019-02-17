
        // Ok entonces... tenemos la parte del cliente que es HTML y JS, y tenemos la parte del servidor que es PHP, para poder enviar mensajes entre la parte del cliente hacia la parte del servidor y viceversa necesitamos de AJAX que funciona usando JQUERY.

        //Lo que hace esta siguiente función es utilizar ajax para que cuando el usuario de click en el boton se despliegue en el html un resultado generado por una funcion php
        $(document).ready(function(){
            $("#boton_cuadrados_cubos").click(function(){ //cuando se de click en el boton
                $.ajax({// uso ajax
                    type: "POST", //tipo post para no mostrar informacion importante 
                    url: 'logical_functions.php', //encuentra el archivo php 
                    data:{function_name:'cuadrados_cubos'}, //le digo la funcion que estoy buscando
                    success: function(result){ //si no hubo errores en el request, el servidor envía un resultado
                $("#cuadrados_cubos").html(result);//con esto despliego el resultado en la sección con id cuadrados cubos
            }});
            });
            
            $("#boton_array_average").click(function(){ //cuando se de click en el boton
                $.ajax({// uso ajax
                    type: "POST", //tipo post para no mostrar informacion importante 
                    url: 'logical_functions.php', //encuentra el archivo php 
                    data:{function_name:'array_average'}, //le digo la funcion que estoy buscando
                    success: function(result){ //si no hubo errores en el request, el servidor envía un resultado
                $("#array_average").html(result);//con esto despliego el resultado en la sección con id cuadrados cubos
            }});
            });
            
            $("#boton_array_median").click(function(){ //cuando se de click en el boton
                $.ajax({// uso ajax
                    type: "POST", //tipo post para no mostrar informacion importante 
                    url: 'logical_functions.php', //encuentra el archivo php 
                    data:{function_name:'array_median'}, //le digo la funcion que estoy buscando
                    success: function(result){ //si no hubo errores en el request, el servidor envía un resultado
                $("#array_median").html(result);//con esto despliego el resultado en la sección con id cuadrados cubos
            }});
            });
            
        });
            
            
            function suma(){
                var a=Math.ceil(Math.random()*1000);
                var b=Math.ceil(Math.random()*1000);
                var res=a+b;
                var inicio=new Date();
                var fin;
                var tiempo;
                var num = prompt("¿Cuál es el resultado de la suma?: "+a+"+"+b,"0");
                fin=new Date();
                tiempo=(fin-inicio)/1000;
                if(num==res){
                    alert("Correcto! El tiempo que tardaste fue: "+tiempo+" segundos.");
                    document.getElementById("caso2").innerHTML = "Correcto!... El tiempo que tardaste fue: "+tiempo+" segundos."
                }
                else{
                    alert("Incorrecto El tiempo que tardaste fue: "+tiempo+" segundos.");
                    document.getElementById("caso2").innerHTML = "Incorrecto!... El tiempo que tardaste fue: "+tiempo+" segundos.";
                }
            }
            
            function inicializa_arreglo(){
                var arreglo=new Array(20);
                arreglo[0]=0;
                arreglo[1]=0;
                var plusOrMinus;
                var a;
                for(var i=2;i<20;i++){
                    plusOrMinus = Math.random() < 0.5 ? -1 : 1; 
                    a=Math.ceil(Math.random()*100);
                    a=a*plusOrMinus;
                    arreglo[i]=a;
                } 
                return arreglo;
            }
            
            function analizar_arreglo(arreglo){
                var size=arreglo.length;
                var ceros=0;
                var positivos=0;
                var negativos=0;
                var text="";
                for (var i=0; i<size; i++){
                        if(arreglo[i]<0){
                            negativos++;
                        }
                         if(arreglo[i]==0){
                            ceros++;
                        }
                         if(arreglo[i]>0){
                            positivos++;
                        }
                }
                text="El arreglo es:\n"+arreglo+"\n\nEl número de ceros es: "+ceros+"\nEl número de positivos es: "+positivos+"\nEl número de negativos es: "+negativos
                alert(text);
                text="El arreglo es:\n"+arreglo+"<br><br>El número de ceros es: "+ceros+"<br>El número de positivos es: "+positivos+"<br>El número de negativos es: "+negativos
                document.getElementById("caso3").innerHTML = text;
            }
            
            function inicializa_arreglo_positivo(){
                var arreglo=new Array(5);
                var a;
                for(var i=0;i<5;i++){ 
                    a=Math.ceil(Math.random()*100);
                    arreglo[i]=a;
                } 
                return arreglo;
            }
            
            function inicializa_matriz(){
                var matriz=[];
                var text="";
                for(var i=0; i<5; i++){
                    matriz[i]=inicializa_arreglo_positivo();
                    text=text+matriz[i]+"<br>";
                }
                document.getElementById("caso4.1").innerHTML = "La matriz es: <br><br>" + text;
                return matriz;
            }
            
            function promedios_matriz(matriz){
                var promedio=0;
                var suma_renglon=0;
                var text="";
                var text_html="";
                var result=Array(5);
                
                for(var i=0; i<5; i++){
                    for(var j=0; j<5; j++){
                        suma_renglon=suma_renglon+matriz[i][j];
                    }
                    promedio=suma_renglon/5;
                    result[i]=promedio;
                    text=text+"\nEl renglon "+i+" es:\n"+matriz[i]+"\n y su promedio es:"+promedio+"\n";
                    text_html=text_html+"<br>El renglon "+i+" es:<br>"+matriz[i]+"<br> y su promedio es:"+promedio+"<br>";
                    suma_renglon=0;
                }
                
                text=text+"\n El arreglo de promedios es:\n"+result;
                text_html=text_html+"<br>El arreglo de promedios es:<br>"+result;
                
                alert(text);
                document.getElementById("caso4.2").innerHTML = text_html;
            }
            
            function new_random_number(){
                return Math.ceil(Math.random()*10000);
            }
              
            function invertir_numero(numero){
                numero=numero+"";
                var text="";
                var text_html="";
                var numero_inv=numero.split("").reverse().join("");
                text="\nEl numero fue: "+numero+"\nEl numero invertido es: "+numero_inv;
                text_html="<br>El numero fue: "+numero+"<br>El numero invertido es: "+numero_inv;
                alert(text);
                document.getElementById("caso5").innerHTML = text_html;
            }
            
            function main(){
                var m=prompt("Input the number m of trailing zeroes: ");
                var my_solution=new trivial_problem(m)
                var nums=my_solution.solve(my_solution.m);
                my_solution.print(my_solution.m,nums);
            }
            
            function trivial_problem(m){
                        this.m=m;
                        this.solve = solve_trivial_problem;
                        this.print = print_output;
            }
            
            function find_trailing_zeroes(n){ 
                var count = 0; 
                for (var i=5; 1<=parseInt(n/i); i=i*5){
                    count= count + parseInt(n/i);
                }
                return count;
            }
            
            function solve_trivial_problem(m){
                var i=0;
                var nums=[]
                for(var n=1; n<100; n++){
                    if(find_trailing_zeroes(n)==m){
                        nums[i]=n;
                        i=i+1;
                    } 
                }
                return nums;
            }
                
            function print_output(m,nums){
                var text="";
                var text_html="";
                text="\nThe numbers with "+m+" trailing zeroes are:\n"+nums;
                text_html="<br>The numbers with "+m+" trailing zeroes are:<br>"+nums;
                alert(text);
                document.getElementById("caso6").innerHTML = text_html;
            }