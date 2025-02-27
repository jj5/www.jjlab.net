<?php

require_once __DIR__ . '/template.php';

render_head( "Jay Jay's Hackaday Application", 'img/application.webp' );

?>

<p>You arrive at work in the morning and check your email. There are a few messages in the jobs inbox. This isn't unusual, but one of them catches your eye. It's from Jay Jay, the host of the nascent electronics video blog <a href="https://www.inthelabwithjayjay.com/">In The Lab With Jay Jay</a>. He read <a href="https://hackaday.com/2025/02/25/were-hiring-come-join-us-7/">the advertisement</a>
and is applying to write for Hackaday. You open the email to find his application.</p>

<p>The application itself is rather understated, it's a bare link to a website you haven't seen before. You click
the link and find yourself reading a webpage that looks eerily similar to Hackaday. You quickly view source on the HTML
and are relieved to see there's a &lt;meta name="robots" content="noindex, nofollow"&gt; meta element in there. You rest
easy knowing this spoof webpage won't turn up in any legit search engines, which is good, given the gratuitous use
of the Hackaday branding.</p>

<p>Jay Jay's full and proper name is John Elliot V. The V on the end of his name is because he's the fifth in a long line of
John Elliots going back to his great great grandfather. (His dad's name was Walter.)</p>

<p>Jay Jay was born in 1980 making him <?= date('Y')-1980 ?> years old this year. He studied computer science
at the <a href="https://www.uts.edu.au/">University of Technology Sydney</a> and has been working as a computer programmer
for the last <?= date('Y')-2000 ?> years. Before ending up as a computer programmer Jay Jay was trained as a chef. With his family he has operated two restaurants, both of them gourmet pizza joints. You are happy to hear that Jay Jay has operated two restaurants,
because now you know that he will do a great deal of work for not very much money.</p>

<p>Jay Jay has had a lifelong interest in electronics. He started when he was 10 years old doing experiments from old
books that he found at his local library. He got an Elenco 200-in-1 electronics kit
when he was in junior high school. During the 90s he started collecting the
<a href="https://www.amazon.com/s?k=Encyclopedia+of+Electronics">Encyclopedia of Electronics</a> and read everything he could get his hands on
from <a href="https://www.amazon.com/stores/Forrest-M.-Mims-III/author/B003UGHJVE">Forrest M. Mims III</a>.</p>

<p>Jay Jay lives in a beautiful part of the world known as the <a
class="external"
target="_blank"
rel="noopener nofollow"
href="https://en.wikipedia.org/wiki/Blue_Mountains_(New_South_Wales)"
title="Click here to learn more about the Blue Mountains.">Blue Mountains</a> which is in New South Wales, Australia, just outside of Sydney.</p>

<p>Jay Jay's favorite type of music is psychedelic trance. He's usually tuned into the <a
class="external"
target="_blank"
rel="noopener nofollow"
href="https://www.di.fm/goapsy"
title="Click here to visit the Goa-Psy Trance channel on di.fm.">Goa-Psy Trance</a> channel on <a
class="external"
target="_blank"
rel="noopener nofollow"
href="https://www.di.fm/"
title="Click here to visit di.fm web radio.">di.fm</a>.</p>

<p>Apart from electronics, computer programming, psychedelic trance, and the Oxford Comma, Jay Jay's special interests include philosophy, mathematics, and database design. Jay Jay's oscilloscope is a <a
class="internal"
rel="nofollow"
href="https://jj5.net/75064"
title="Click here for more information about the Rigol MSO5074 Mixed Signal Oscilloscope.">Rigol MSO5074</a>, his mechanical keyboard is a <a
class="internal"
rel="nofollow"
href="https://jj5.net/80030"
title="Click here for more information about my FILCO Majestouch 2SS 104-key Mechanical Keyboard.">FILCO Majestouch 2SS</a> with <a
class="external"
target="_blank"
rel="noopener nofollow"
href="https://www.cherry.de/en-gb/product/mx2a-speed-silver"
title="Click here for more information about my Cherry MX Speed Silver keyboard switches.">Cherry MX Speed Silver switches</a>, his favorite computer game is <a
class="external"
target="_blank"
rel="noopener nofollow"
href="https://starcraft2.blizzard.com/"
title="Click here for more information about StarCraft II.">StarCraft II</a>, this favorite story is <a
class="external"
target="_blank"
rel="noopener nofollow"
href="https://en.wikipedia.org/wiki/The_Lord_of_the_Rings"
title="Click here for more information about The Lord of the Rings.">The Lord of the Rings</a>, his favorite movie is <a
class="external"
target="_blank"
rel="noopener nofollow"
href="https://en.wikipedia.org/wiki/The_Matrix"
title="Click here for more information about The Matrix.">The Matrix</a>, and his favorite color is <span
style="color: #37a101;">#37a101</span>.</p>

<p>Jay Jay blogs at <a href="https://blog.jj5.net/">blog.jj5.net</a> and he's on github at <a href="https://github.com/jj5">github.com/jj5</a>.</p>

<p>Jay Jay subscribes to
<a
class="external"
target="_blank"
rel="noopener nofollow"
href="https://www.siliconchip.com.au/"
title="Click here for more information about Silicon Chip magazine.">Silicon Chip</a>
and <a
class="external"
target="_blank"
rel="noopener nofollow"
href="https://makezine.com/"
title="Click here for more information about Make: magazine.">Make:</a>
magazines. He's a big fan of the <a
class="external"
target="_blank" rel="noopener nofollow"
href="https://www.eevblog.com/" title="Click here for more information about EEVblog.">EEVblog</a>
and the <a
class="external"
target="_blank"
rel="noopener nofollow"
href="https://www.eevblog.com/forum/"
title="Click here for more information about the EEVblog Forum.">EEVblog Forum</a>.
And he supports a number of electronics video bloggers via Patreon as <a
class="external"
target="_blank"
rel="noopener nofollow"
href="https://www.inthelabwithjayjay.com/in-the-lab/homies.php"
title="Click here for more information about Jay Jay's homies.">listed here</a>.</p>

<p>Jay Jay knows the instructions were to deliver <em><strong>one</strong></em> example article written in the voice of Hackaday. And he did that.
Seven times. In his defense he wasn't sure what would be the best topic. Did he over deliver? Or did he ignore instructions? You decide.
(You don't have to read them all, pick one that takes your interest!)</p>

<?php render_index( false ); ?>

<p>Jay Jay would like to thank you for your consideration. :)</p>

<?php

render_foot();
