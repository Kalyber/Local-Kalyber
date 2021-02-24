function bioCreator() {
     // add class to results wrapper
     var element = document.getElementById("bioResults");
     element.classList.add("bio-creator__results--show");

     // add class to results wrapper inner
     var element = document.getElementById("bioResultsInner");
     element.classList.add("bio-creator__results__inner--show");

     // who is the bio for
     const whatGuy = document.querySelector('input[name="whatGuy"]:checked').value
     if (whatGuy == "Joe") {
          var bioName = "<h3>Joe Donofrio</h3>";
     } else {
          var bioName = "<h3>James de la Bastide</h3>";
     }

     // store all answers in array
     var answers = [];
     for (var i = 0; i < 12; i++) {
          if (document.getElementById("bio-q" + i).value == null || document.getElementById("bio-q" + i).value == '') {
               answers[i] = "[Really? You left this blank?]";
          } else {
               answers[i] = document.getElementById("bio-q" + i).value;
          }
     }

     // make capital
     const toCap2 = answers[2];
     const wordCap2 = toCap2.charAt(0).toUpperCase() + toCap2.slice(1);
     const toCap9 = answers[9];
     const wordCap9 = toCap9.charAt(0).toUpperCase() + toCap9.slice(1);

     // a/an check
     var testStr = answers[7];
     var vowelRegex = '^[aieouAIEOU].*';
     var matched = testStr.match(vowelRegex);
     if(matched) {
          var aOrAn = "an";
     } else {
          var aOrAn = "a";
     }

     // number suffix check
     if (answers[4] == 1) {
          var numSuffix = "st";
     } else if(answers[4] == 2) {
          var numSuffix = "nd";
     } else if (answers[4] == 3) {
          var numSuffix = "rd";
     } else {
          var numSuffix = "th";
     }

     // random arrays
     var jobs = ['spoon polishers', 'walrus wranglers', 'rodeo clowns', 'human statues', 'balloon artists', 'ghost hunters', 'rollercoaster testers'];
     let rndJob = jobs[Math.floor(Math.random() * jobs.length)];

     var personNames = ['La Toya', 'Jermaine', 'Tito', 'Marlon', 'Janet', 'Michael', 'Jackie', 'Rebbie'];
     let rndName = personNames[Math.floor(Math.random() * personNames.length)];

     // build sentences
     // sentence 1
     var rndNumber1 = Math.floor(Math.random() * 2) + 1;
     if (rndNumber1 == 1) {
          var sent1 = "Born and raised in " + answers[0] + ", " + whatGuy + " spent his youth dreaming of becoming " + aOrAn + " " + answers[7] + " one day. ";  
     } else {
          var sent1 = whatGuy + " was born in " + answers[0] + " to a family of " + rndJob + ". While it was expected that he follow in his father's footsteps, he wanted to be " + aOrAn + " " + answers[7] + ". His mother still has not completely forgiven him. ";
     }

     // sentence 2
     var rndNumber2 = Math.floor(Math.random() * 2) + 1;
     if (rndNumber2 == 1) {
          var sent2 = "Because of his natural talent in " + answers[11] + ", he was often compared to a young " + answers[5] + ". ";  
     } else {
          var sent2 = "Early on, " + whatGuy + " found a passion for " + answers[11] + ", and it was at a " + answers[11] + " convention that he met and began a very intense penpal relationship with " + answers[5] + ". ";
     }

     // sentence 3
     var rndNumber3 = Math.floor(Math.random() * 2) + 1;
     if (rndNumber3 == 1) {
          var sent3 = "He began his professional journey in " + answers[6] + ", after graduating " + numberSuffix(answers[4]) + " in his class with a major in " + answers[10] + ". ";  
     } else {
          var sent3 = "After attending college for a mere " + answers[4] + " years, " + whatGuy + " graduated in " + answers[6] + ". Rather than choosing any one single topic to major in, " + whatGuy + " majored in all of them, but if pushed, would say his favorite subject was " + answers[10] + ". ";
     }

     // sentence 4
     var rndNumber4 = Math.floor(Math.random() * 2) + 1;
     if (rndNumber4 == 1) {
          var sent4 = "Throughout his career " + whatGuy + " has received numerous accolades, including the prestigious " + wordCap2 + " " + wordCap9 + " award. ";  
     } else {
          var sent4 = "When not busy working, " + whatGuy + " enjoys spending his spare time writing intensely detailed descriptions of the color" + answers[2] + ", which he reads aloud to his favorite " + answers[9] + ". ";
     }

     // sentence 5
     var rndNumber5 = Math.floor(Math.random() * 2) + 1;
     if (rndNumber5 == 1) {
          var sent5 = "An innovative thinker, " + whatGuy + " was instrumental in the digital strategy behind the wildly successful " + answers[8] + ". ";  
     } else {
          var sent5 = "Never a slacker, " + whatGuy + " quickly made a name for himself as one of the visionaries behind the digital strategy that rocketed " + answers[8] + " into popular culture. ";
     }

     // sentence 6
     var rndNumber6 = Math.floor(Math.random() * 2) + 1;
     if (rndNumber6 == 1) {
          var sent6 = whatGuy + " enjoys " + answers[3] + " when he can, and spending time with his " + answers[1] + ", " + rndName + ". ";  
     } else {
          var sent6 = whatGuy + " can often be found at the park " + answers[3] + " with the " + answers[1] + "s.";
     }

     // create final bio text
     var finalBio = bioName;
     finalBio += sent1;
     finalBio += sent2;
     finalBio += sent3;
     finalBio += sent4;
     finalBio += sent5;
     finalBio += sent6;

     // set bio text
     document.getElementById("bioResultsInner").innerHTML = finalBio;
}

function numberSuffix(i) {
     var j = i % 10,
         k = i % 100;
     if (j == 1 && k != 11) {
         return i + "st";
     }
     if (j == 2 && k != 12) {
         return i + "nd";
     }
     if (j == 3 && k != 13) {
         return i + "rd";
     }
     return i + "th";
 }