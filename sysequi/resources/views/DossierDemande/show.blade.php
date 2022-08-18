
<x-text>
   <div class="mx-8">
       <div class="font-rocksalt font-bold text-4xl text-green-900 text-center py-6 uppercase"> Dossier 
        {{ $dossier->numero_demande}}
        {{ $dossier->date_demande }}
        {{ $dossier->type_demande }}
        {{ $dossier->montant_frais }}
        {{ $dossier->refugie_reconnu}}
        {{ $dossier->actiris }}
        {{ $dossier->vdab }}
        {{ $dossier->statut }}
           
       </div>
       <div class="flex flex-row ">
           <div class="flex  basis-1/3">  
               <img class=" rounded-full m-2 " src="" 
               alt=""> 
           </div>
           <div class=" flex basis-2/3 m-4 pt-10 text-gray-800">
               <p class="text-gray-700 text-base">
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed ante ipsum. 
                   Sed libero ante, auctor sit amet condimentum in, pellentesque ut lectus. Donec a pharetra neque. 
                   Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
                   Nunc sit amet purus at ex feugiat tincidunt. Aenean et orci nec tellus congue maximus. 
                   Nullam eget dignissim quam, sed bibendum quam. Pellentesque libero sapien, cursus et vulputate ut,
                   vulputate vitae sem. Pellentesque ullamcorper nisi diam, at eleifend orci cursus tempus. 
                   Maecenas ut vulputate ex. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                   per inceptos himenaeos. Nullam ornare scelerisque odio at porttitor. Proin congue quam vitae 
                   ultricies sollicitudin. 
                   Donec porttitor vel quam dignissim ornare. Maecenas vehicula posuere ex vitae sodales. 
               </p>
               
           
           </div>
   </div>  
   <div class="px-6 pt-4 pb-2">
       <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm 
       font-semibold text-gray-700 mr-2 mb-2">#test</span>
       <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm 
       font-semibold text-gray-700 mr-2 mb-2">#test</span>
       <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm 
       font-semibold text-gray-700 mr-2 mb-2">#test</span>
     </div> 
 

</div>   
</x-text>