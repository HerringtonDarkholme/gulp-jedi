<?php
echo '<!doctype html>', "\n";

 echo '<html'
  , '>'
   , '<head'
    , '>'
     , '<meta'
       , ' charset="utf-8"'
      , '>'
     , '<title'
      , '>'
       , htmlspecialchars(($page->title) . (' - Jedi'))
     , '</title>'
     , '<link'
       , ' rel="stylesheet"'
       , ' href="', htmlspecialchars($data->url->static('common.css')), '"'
      , '>'
   , '</head>';
  
   echo '<body'
    , '>';
    
     echo '<section id="comment"'
      , '>';
      
       echo '<h1'
        , '>'
         , 'Comment', "\n"
       , '</h1>';
      
       echo '<!-- Here is HTML comments -->';
      
       echo '<!--', "\n"
       , 'Comments can be', "\n"
       , 'multiple', "\n"
       , 'lines…', "\n"
       , '-->';
      
       echo '<!-- “- -” in the comments will be escaped automatically -->'
     , '</section>';
    
     echo '<section id="suppress"'
      , '>';
      
       echo '<h1'
        , '>'
         , 'Suppress', "\n"
       , '</h1>';
      
       // This is code suppress, no ouptput at all
      
       // p
       // 'It's easy to use suppress to disable
       // 'the whole block of code
     echo '</section>';
    
     echo '<section id="text"'
      , '>';
      
       echo '<h1'
        , '>'
         , 'Text', "\n"
       , '</h1>';
      
       echo '<p'
        , '>'
         , 'Normal text, can contains any character include \' and ",', "\n"
         , 'the special HTML characters like &lt; > &amp; will be escaped,', "\n"
         , 'also support link break.', "\n"
       , '</p>';
      
       echo '<p'
        , '>'
         , htmlspecialchars(('Interpolation text, in which expressions can be interplated:'))
         , htmlspecialchars(('1 + 1 = ') . ((1 + 1)))
       , '</p>';
      
       echo '<p'
        , '>'
         , 'Note: all whitespaces include newline character will be', "\n"
         , 'collapsed to a single space. So multiple lines of text', "\n"
         , 'will produce redundunt spaces for East-Asian languages.', "\n";
        
         echo 'But it can be controlled by adding quatation mark a'
         , 't the end of the line'
       , '</p>'
     , '</section>';
    
     echo '<section id="element"'
      , '>';
      
       echo '<h1'
        , '>'
         , 'Element', "\n"
       , '</h1>';
      
       echo '<p'
        , '>'
         , 'Just write element name, Jedi will deal with rest problems', "\n"
         , 'like when and how to add close tag', "\n"
       , '</p>';
      
       echo '<p class="note"'
        , '>'
         , 'element with class', "\n"
       , '</p>';
      
       echo '<p class="help note"'
        , '>'
         , 'multiple classes', "\n"
       , '</p>';
      
       echo '<p id="element-with-id"'
        , '>'
         , 'with ID', "\n"
       , '</p>';
      
       echo '<p class="help note" id="element-with-classlist-and-id"'
        , '>'
         , 'You can mix classes and ID, but should write as the order', "\n"
         , 'tagname.class1.class2#id', "\n"
         , 'tagname should not be omitted, (eg. .naked-class),', "\n"
         , 'because it tend to divitius', "\n"
       , '</p>';
      
       echo '<p'
        , '>'
         , 'Only-one child element can be collapsed to the', "\n"
         , 'line of parent element:', "\n"
         , '<nav'
          , '>'
           , '<ul id="standard-bodies"'
            , '>'
             , '<li'
              , '>'
               , '<a'
                 , ' href="http://www.w3.org/"'
                , '>'
                 , 'W3C', "\n"
               , '</a>'
             , '</li>'
             , '<li'
              , '>'
               , '<a'
                 , ' href="http://www.whatwg.org/"'
                , '>'
                 , 'WHATWG', "\n"
               , '</a>'
             , '</li>'
             , '<li'
              , '>'
               , '<a'
                 , ' href="http://www.ecmascript.org/"'
                , '>'
                 , 'ECMA TC39', "\n"
               , '</a>'
             , '</li>'
           , '</ul>'
         , '</nav>'
       , '</p>';
      
       echo '<p'
         , ' title="You can write attributes after some contents if you like"'
        , '>'
         , 'attributes', "\n"
       , '</p>'
     , '</section>';
    
     echo '<section id="instruction"'
      , '>';
      
       echo '<h1'
        , '>'
         , 'Instruction', "\n"
       , '</h1>';
      
       if (($data->user->age < 18)) {
         echo '<p'
          , '>'
           , 'NO ENTER!', "\n"
         , '</p>';
       }
       else {
         echo '<p'
          , '>'
           , 'Welcome to the lost paradise.', "\n"
         , '</p>';
       }
      
       echo '<ul'
        , '>';
         foreach ([1, 2, 3] as $x) {
           echo '<li'
            , '>'
             , htmlspecialchars(('x = ') . ($x))
           , '</li>';
         }
       echo '</ul>';
      
       echo '<p'
        , '>'
         , 'Some instructions can be write after element name', "\n"
         , 'to keep the nest structure of HTML', "\n"
       , '</p>';
      
       if (($data->user->age < 18)) {
         echo '<p'
          , '>'
           , 'NO ENTER!', "\n"
         , '</p>';
       }
       else {
         echo '<p'
          , '>'
           , 'Welcome to the lost paradise.', "\n"
         , '</p>';
       }
      
       echo '<ul'
        , '>';
         foreach ((range(1, 10)) as $x) {
           echo '<li'
            , '>'
             , htmlspecialchars(('x = ') . ($x))
           , '</li>';
         }
       echo '</ul>'
     , '</section>';
    
     echo '<section id="inject"'
      , '>';
      
       echo '<h1'
        , '>'
         , 'Inject', "\n"
       , '</h1>';
      
       echo 'Here we inject some codes of host language';
      
       $user = 'hax';
       if ($user)
       {
         echo '<p'
          , '>'
           , 'Hello', "\n"
           , $user
         , '</p>';
       }
     echo '</section>'
   , '</body>'
 , '</html>';

?>
