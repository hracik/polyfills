<?php
$polyfills = [];
try{
    //test symfony/polyfill-intl-icu
    intl_get_error_code();
}
catch (Throwable $exception) {
    $polyfills['packages'][] = 'symfony/polyfill-intl-icu';
    $polyfills['symfony/polyfill-intl-icu'] = $exception->getMessage();
}

try{
    //test symfony/polyfill-intl-idn
    idn_to_ascii('algomedia.ee');
    idn_to_utf8('algomedia.ee'); 
}
catch (Throwable $exception) {
    $polyfills['packages'][] = 'symfony/polyfill-intl-idn';
    $polyfills['symfony/polyfill-intl-idn'] = $exception->getMessage();
}

try{
    //test symfony/polyfill-intl-grapheme
    grapheme_extract('algomedia.ee', 1);
}
catch (Throwable $exception) {
    $polyfills['packages'][] = 'symfony/polyfill-intl-grapheme';
    $polyfills['symfony/polyfill-intl-grapheme'] = $exception->getMessage();
}

try{
    //test symfony/polyfill-intl-normalizer
    Normalizer::isNormalized('algomedia.ee');
}
catch (Throwable $exception) {
    $polyfills['packages'][] = 'symfony/polyfill-intl-normalizer';
    $polyfills['symfony/polyfill-intl-normalizer'] = $exception->getMessage();
}

try{
    //test symfony/polyfill-intl-messageformatter
    new MessageFormatter("en_US", "string");
}
catch (Throwable $exception) {
    $polyfills['packages'][] = 'symfony/polyfill-intl-messageformatter';
    $polyfills['symfony/polyfill-intl-messageformatter'] = $exception->getMessage();
}

try{
    //test symfony/polyfill-apcu
    apcu_enabled(); 
}
catch (Throwable $exception) {
    $polyfills['packages'][] = 'symfony/polyfill-apcu';
    $polyfills['symfony/polyfill-apcu'] = $exception->getMessage();
}

try{
    //test symfony/polyfill-ctype
    ctype_digit(10); 
}
catch (Throwable $exception) {
    $polyfills['packages'][] = 'symfony/polyfill-ctype';
    $polyfills['symfony/polyfill-ctype'] = $exception->getMessage();
}

try{
    //test symfony/polyfill-mbstring
    mb_strlen('algomedia.ee');
}
catch (Throwable $exception) {
    $polyfills['packages'][] = 'symfony/polyfill-mbstring';
        $polyfills['symfony/polyfill-mbstring'] = $exception->getMessage();

}

try{
    //test symfony/polyfill-uuid
    uuid_create();
}
catch (Throwable $exception) {
    $polyfills['packages'][] = 'symfony/polyfill-uuid';
    $polyfills['symfony/polyfill-uuid'] = $exception->getMessage();
}

try{
    //test GD-libavif - AVIF conversion
    $image = imagecreate(10, 10);
    imageavif($image, 'test.avif');
}
catch (Throwable $exception) {
    $polyfills['GD-libavif - AVIF conversion'] = $exception->getMessage();
}

echo json_encode($polyfills);
?>