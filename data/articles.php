<?php 


function getArticles(){
   $items = [
      [
       'id'=>1,
       'titre'=>"La rentree scolaire",
       'description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque perferendis suscipit consequuntur eos temporibus mollitia sequi obcaecati tenetur quis dolores sed, eaque numquam nulla odit nam hic. Quae, ut neque.',
      ],
      [
       'id'=>2,
       'titre'=>"La peche sur les cotes de pointe-noire",
       'description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque perferendis suscipit consequuntur eos temporibus mollitia sequi obcaecati tenetur quis dolores sed, eaque numquam nulla odit nam hic. Quae, ut neque.',
      ],
      [
       'id'=>3,
       'titre'=>"Les eclipses solaires",
       'description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque perferendis suscipit consequuntur eos temporibus mollitia sequi obcaecati tenetur quis dolores sed, eaque numquam nulla odit nam hic. Quae, ut neque.',
      ],
      [
         'id'=>4,
         'titre'=>"Les parcs et reserves naturelles",
         'description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque perferendis suscipit consequuntur eos temporibus mollitia sequi obcaecati tenetur quis dolores sed, eaque numquam nulla odit nam hic. Quae, ut neque.',
        ],
   ];

   return $items;
}

function index(){
  return [];
}


function showArticle($i){
   $elts = getArticles();
   $elt = null;
   foreach($elts as $article){
       if($article['id'] == $i ){
           $elt = $article;
       }
   }
   return $elt;
}

?>