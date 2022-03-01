
<?php

/**
 * Created by PhpStorm.
 * User: Fawad
 * Date: 5/21/2017
 * Time: 2:43 PM
 */

$query='PREFIX dbo: <http://dbpedia.org/ontology/>
PREFIX hint: <http://www.bigdata.com/queryHints#>
PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
PREFIX owl: <http://www.w3.org/2002/07/owl#>
PREFIX wdt: <http://www.wikidata.org/prop/direct/>

SELECT  DISTINCT  ?Actor  ?deathcause  ?Death_date ?birthplace ?birthDate ?Starring   ?imdbId ?discogsId 
(count(distinct ?awardscount) as ?awardscount2)
WHERE {
   hint:Query hint:optimizer "None" . 
    SERVICE <http://dbpedia.org/sparql> {
      ?c rdf:type <http://umbel.org/umbel/rc/Actor>.
       ?c rdfs:label ?Actor.
      
       ?c dbo:deathDate ?Death_date.
       
       ?c dbo:birthPlace ?b.
       ?b rdfs:label ?birthplace.

       ?c dbo:deathCause ?a.
       ?a rdfs:label ?deathcause.
       ?c dbo:birthDate ?birthDate.
       
       ?Starring rdf:type dbo:Film .
       ?Starring dbo:starring  ?c .
      
       ?c owl:sameAs ?wikidata_actor .
      
      FILTER (LANG(?Actor)="en").
      FILTER(?Death_date >= "1950-01-01"^^xsd:date).
      FILTER (LANG(?birthplace)="en").
      FILTER (LANG(?deathcause)="en").
      FILTER (strstarts(str(?wikidata_actor), "http://www.wikidata.org"))
   }
   optional{ ?wikidata_actor wdt:P345 ?imdbId.}               
   optional {?wikidata_actor wdt:P1954 ?discogsId. }
   optional {?wikidata_actor wdt:P166 ?awardscount.}
  
}GROUP BY ?Actor  ?deathcause  ?Death_date ?birthplace ?birthDate ?Starring  ?imdbId ?discogsId ?wikidata_actor
ORDER BY DESC (?awardscount2)
LIMIT 500
';
$q=urlencode($query);
$q1=str_replace("+","%20",$q);
$myquery="https://query.wikidata.org/embed.html#".$q1;
?>
<iframe style="height: 1000px;width: 100%;" src="<?php echo $myquery; ?>"></iframe>

