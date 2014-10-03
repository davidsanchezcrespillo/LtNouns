<?php 
namespace LtWords\LtNouns;

use LtWords\LtWordTypes\LtWordTypes;

/**
 * Class to generate noun declensions in Lithuanian language.
 * References:
 * https://lt.wikipedia.org/wiki/Kir%C4%8Diuot%C4%97
 */
class LtNouns
{
  // Service to get the word type for a given noun
  protected $_wordTypes;

  protected $_regularEndings = array(
    "ė" => array(
        "singular" => array(
          "kas" => "ė",
          "ko" => "ės",
          "ką" => "ę",
          "kam" => "ei",
          "kame" => "ėje",
          "kuo" => "e",
          "o" => "e"
        ),
        "plural" => array(
          "kas" => "ės",
          "ko" => "ių",
          "ką" => "es",
          "kam" => "ėms",
          "kame" => "ėse",
          "kuo" => "ėmis",
          "o" => "ės"
        ),
    ),
    "tė" => array(
        "singular" => array(
          "kas" => "tė",
          "ko" => "tės",
          "ką" => "tę",
          "kam" => "tei",
          "kame" => "tėje",
          "kuo" => "te",
          "o" => "te"
        ),
        "plural" => array(
          "kas" => "tės",
          "ko" => "čių",
          "ką" => "tes",
          "kam" => "tėms",
          "kame" => "tėse",
          "kuo" => "tėmis",
          "o" => "tės"
        ),
    ),
    "dė" => array(
        "singular" => array(
          "kas" => "dė",
          "ko" => "dės",
          "ką" => "dę",
          "kam" => "dei",
          "kame" => "dėje",
          "kuo" => "de",
          "o" => "de"
        ),
        "plural" => array(
          "kas" => "dės",
          "ko" => "džių",
          "ką" => "des",
          "kam" => "dėms",
          "kame" => "dėse",
          "kuo" => "dėmis",
          "o" => "dės"
        ),
    ),
    "a" => array(
        "singular" => array(
          "kas" => "a",
          "ko" => "os",
          "ką" => "ą",
          "kam" => "ai",
          "kame" => "oje",
          "kuo" => "a",
          "o" => "a"
        ),
        "plural" => array(
          "kas" => "os",
          "ko" => "ų",
          "ką" => "as",
          "kam" => "oms",
          "kame" => "ose",
          "kuo" => "omis",
          "o" => "os"
        ),
    ),
    "as" => array(
        "singular" => array(
          "kas" => "as",
          "ko" => "o",
          "ką" => "ą",
          "kam" => "ui",
          "kame" => "e",
          "kuo" => "u",
          "o" => "e"
        ),
        "plural" => array(
          "kas" => "ai",
          "ko" => "ų",
          "ką" => "us",
          "kam" => "ams",
          "kame" => "uose",
          "kuo" => "ais",
          "o" => "ai"
        ),
    ),
    "ukas" => array(
        "singular" => array(
          "kas" => "ukas",
          "ko" => "uko",
          "ką" => "uką",
          "kam" => "ukui",
          "kame" => "uke",
          "kuo" => "uku",
          "o" => "uk"
        ),
        "plural" => array(
          "kas" => "ukai",
          "ko" => "ukų",
          "ką" => "ukus",
          "kam" => "ukams",
          "kame" => "ukuose",
          "kuo" => "ukais",
          "o" => "ukai"
        ),
    ),
    "ias" => array(
        "singular" => array(
          "kas" => "ias",
          "ko" => "io",
          "ką" => "ią",
          "kam" => "iui",
          "kame" => "yje",
          "kuo" => "iu",
          "o" => "y"
        ),
        "plural" => array(
          "kas" => "iai",
          "ko" => "ių",
          "ką" => "ius",
          "kam" => "iams",
          "kame" => "iuose",
          "kuo" => "iais",
          "o" => "iai"
        ),
    ),
    "jas" => array(
        "singular" => array(
          "kas" => "jas",
          "ko" => "jo",
          "ką" => "ją",
          "kam" => "jui",
          "kame" => "juje",
          "kuo" => "ju",
          "o" => "jau"
        ),
        "plural" => array(
          "kas" => "jai",
          "ko" => "jų",
          "ką" => "jus",
          "kam" => "jams",
          "kame" => "juose",
          "kuo" => "jais",
          "o" => "jai"
       ),
    ),
    "is" => array(
        "singular" => array(
          "kas" => "is",
          "ko" => "io",
          "ką" => "į",
          "kam" => "iui",
          "kame" => "yje",
          "kuo" => "iu",
          "o" => "i"
        ),
        "plural" => array(
          "kas" => "iai",
          "ko" => "ių",
          "ką" => "ius",
          "kam" => "iams",
          "kame" => "iuose",
          "kuo" => "iais",
          "o" => "iai"
       ),
    ),
    "dis" => array(
        "singular" => array(
          "kas" => "dis",
          "ko" => "džio",
          "ką" => "dį",
          "kam" => "džiui",
          "kame" => "dyje",
          "kuo" => "džiu",
          "o" => "di"
        ),
        "plural" => array(
          "kas" => "džiai",
          "ko" => "džių",
          "ką" => "džius",
          "kam" => "džiams",
          "kame" => "džiuose",
          "kuo" => "džiais",
          "o" => "džiai"
       ),
    ),
    "tis" => array(
        "singular" => array(
          "kas" => "tis",
          "ko" => "čio",
          "ką" => "tį",
          "kam" => "čiui",
          "kame" => "tyje",
          "kuo" => "čiu",
          "o" => "ti"
        ),
        "plural" => array(
          "kas" => "čiai",
          "ko" => "čių",
          "ką" => "čius",
          "kam" => "čiams",
          "kame" => "čiuose",
          "kuo" => "čiais",
          "o" => "čiai"
       ),
    ),
    "jis" => array(
        "singular" => array(
          "kas" => "jis",
          "ko" => "jo",
          "ką" => "jį",
          "kam" => "jui",
          "kame" => "jyje",
          "kuo" => "ju",
          "o" => "ji"
        ),
        "plural" => array(
          "kas" => "jai",
          "ko" => "jų",
          "ką" => "jus",
          "kam" => "jams",
          "kame" => "juose",
          "kuo" => "jais",
          "o" => "jai"
       ),
    ),
    "ys" => array(
        "singular" => array(
          "kas" => "ys",
          "ko" => "io",
          "ką" => "į",
          "kam" => "iui",
          "kame" => "yje",
          "kuo" => "iu",
          "o" => "y"
        ),
        "plural" => array(
          "kas" => "iai",
          "ko" => "ių",
          "ką" => "ius",
          "kam" => "iams",
          "kame" => "iuose",
          "kuo" => "iais",
          "o" => "iai"
       ),
    ),
    "dys" => array(
        "singular" => array(
          "kas" => "dys",
          "ko" => "džio",
          "ką" => "dį",
          "kam" => "džiui",
          "kame" => "dyje",
          "kuo" => "džiu",
          "o" => "dy"
        ),
        "plural" => array(
          "kas" => "džiai",
          "ko" => "džių",
          "ką" => "džius",
          "kam" => "džiams",
          "kame" => "džiuose",
          "kuo" => "džiais",
          "o" => "džiai"
       ),
    ),
    "jys" => array(
        "singular" => array(
          "kas" => "jys",
          "ko" => "jo",
          "ką" => "jį",
          "kam" => "jui",
          "kame" => "jyje",
          "kuo" => "ju",
          "o" => "jy"
        ),
        "plural" => array(
          "kas" => "jai",
          "ko" => "jų",
          "ką" => "jus",
          "kam" => "jams",
          "kame" => "juose",
          "kuo" => "jais",
          "o" => "jai"
       ),
    ),
    "tys" => array(
        "singular" => array(
          "kas" => "tys",
          "ko" => "čio",
          "ką" => "tį",
          "kam" => "čiui",
          "kame" => "tyje",
          "kuo" => "čiu",
          "o" => "ty"
        ),
        "plural" => array(
          "kas" => "čiai",
          "ko" => "čių",
          "ką" => "čius",
          "kam" => "čiams",
          "kame" => "čiuose",
          "kuo" => "čiais",
          "o" => "čiai"
       ),
    ),
    "us" => array(
        "singular" => array(
          "kas" => "us",
          "ko" => "aus",
          "ką" => "ų",
          "kam" => "ui",
          "kame" => "uje",
          "kuo" => "umi",
          "o" => "au"
        ),
        "plural" => array(
          "kas" => "ūs",
          "ko" => "ų",
          "ką" => "us",
          "kam" => "ums",
          "kame" => "uose",
          "kuo" => "umis",
          "o" => "ūs"
       ),
    ),
    "ius" => array(
        "singular" => array(
          "kas" => "ius",
          "ko" => "iaus",
          "ką" => "ių",
          "kam" => "iui",
          "kame" => "iuje",
          "kuo" => "iumi",
          "o" => "iau"
        ),
        "plural" => array(
          "kas" => "iai",
          "ko" => "ių",
          "ką" => "ius",
          "kam" => "iams",
          "kame" => "iuose",
          "kuo" => "iais",
          "o" => "iai"
       ),
    ),
    "jus" => array(
        "singular" => array(
          "kas" => "jus",
          "ko" => "jaus",
          "ką" => "jų",
          "kam" => "jui",
          "kame" => "juje",
          "kuo" => "jumi",
          "o" => "jau"
        ),
        "plural" => array(
          "kas" => "jūs",
          "ko" => "jų",
          "ką" => "jus",
          "kam" => "jams",
          "kame" => "juose",
          "kuo" => "jais",
          "o" => "jūs"
       ),
    ),
    "ti" => array(
        "singular" => array(
          "kas" => "ti",
          "ko" => "čios",
          "ką" => "čią",
          "kam" => "čiai",
          "kame" => "čioje",
          "kuo" => "čia",
          "o" => "ti"
        ),
        "plural" => array(
          "kas" => "čios",
          "ko" => "čių",
          "ką" => "čias",
          "kam" => "čioms",
          "kame" => "čiose",
          "kuo" => "čiomis",
          "o" => "čios"
       ),
    ),
  );


  protected $_vEndings = array(
    "is" => array(
        "singular" => array(
          "kas" => "is",
          "ko" => "ies",
          "ką" => "į",
          "kam" => "iui",
          "kame" => "yje",
          "kuo" => "imi",
          "o" => "ie"
        ),
        "plural" => array(
          "kas" => "ys",
          "ko" => array("hard" => "ų", "soft" => "ių"),
          "ką" => "is",
          "kam" => "ims",
          "kame" => "yse",
          "kuo" => "imis",
          "o" => "ys"
        ),
    ),
    "tis" => array(
        "singular" => array(
          "kas" => "tis",
          "ko" => "ties",
          "ką" => "tį",
          "kam" => "čiui",
          "kame" => "tyje",
          "kuo" => "timi",
          "o" => "tie"
        ),
        "plural" => array(
          "kas" => "tys",
          "ko" => array("hard" => "tų", "soft" => "čių"),
          "ką" => "tis",
          "kam" => "tims",
          "kame" => "tyse",
          "kuo" => "timis",
          "o" => "tys"
        ),
    ),
    "uo" => array(
        "singular" => array(
          "kas" => "uo",
          "ko" => "ens",
          "ką" => "enį",
          "kam" => "eniui",
          "kame" => "enyje",
          "kuo" => "eniu",
          "o" => "enie"
        ),
        "plural" => array(
          "kas" => "enys",
          "ko" => array("hard" => "enų", "soft" => "enų"),
          "ką" => "enis",
          "kam" => "enims",
          "kame" => "enyse",
          "kuo" => "enimis",
          "o" => "enys"
        ),
    ),
  );

  protected $_mEndings = array(
    "tis" => array(
        "singular" => array(
          "kas" => "tis",
          "ko" => "ties",
          "ką" => "tį",
          "kam" => "čiai",
          "kame" => "tyje",
          "kuo" => "timi",
          "o" => "tie"
        ),
        "plural" => array(
          "kas" => "tys",
          "ko" => array("hard" => "tų", "soft" => "čių"),
          "ką" => "tis",
          "kam" => "tims",
          "kame" => "tyse",
          "kuo" => "timis",
          "o" => "tys"
        ),
    ),
    "dis" => array(
        "singular" => array(
          "kas" => "dis",
          "ko" => "dies",
          "ką" => "dį",
          "kam" => "džiai",
          "kame" => "dyje",
          "kuo" => "dimi",
          "o" => "die"
        ),
        "plural" => array(
          "kas" => "dys",
          "ko" => array("hard" => "dų", "soft" => "džių"),
          "ką" => "dis",
          "kam" => "dims",
          "kame" => "dyse",
          "kuo" => "dimis",
          "o" => "dys"
        ),
    ),
    "is" => array(
        "singular" => array(
          "kas" => "is",
          "ko" => "ies",
          "ką" => "į",
          "kam" => "iai",
          "kame" => "yje",
          "kuo" => "imi",
          "o" => "ie"
        ),
        "plural" => array(
          "kas" => "ys",
          "ko" => array("hard" => "ų", "soft" => "ių"),
          "ką" => "is",
          "kam" => "ims",
          "kame" => "yse",
          "kuo" => "imis",
          "o" => "ys"
        ),
    ),
    "ys" => array(
        "singular" => array(
          "kas" => "",
          "ko" => "",
          "ką" => "",
          "kam" => "",
          "kame" => "",
          "kuo" => "",
          "o" => ""
        ),
        "plural" => array(
          "kas" => "ys",
          "ko" => array("hard" => "ų", "soft" => "ių"),
          "ką" => "is",
          "kam" => "ims",
          "kame" => "yse",
          "kuo" => "imis",
          "o" => "ys"
        ),
    ),
    "tys" => array(
        "singular" => array(
          "kas" => "",
          "ko" => "",
          "ką" => "",
          "kam" => "",
          "kame" => "",
          "kuo" => "",
          "o" => ""
        ),
        "plural" => array(
          "kas" => "tys",
          "ko" => array("hard" => "tų", "soft" => "čių"),
          "ką" => "tis",
          "kam" => "tims",
          "kame" => "tyse",
          "kuo" => "timis",
          "o" => "tys"
        ),
    ),
    "dys" => array(
        "singular" => array(
          "kas" => "",
          "ko" => "",
          "ką" => "",
          "kam" => "",
          "kame" => "",
          "kuo" => "",
          "o" => ""
        ),
        "plural" => array(
          "kas" => "dys",
          "ko" => array("hard" => "dų", "soft" => "džių"),
          "ką" => "dis",
          "kam" => "dims",
          "kame" => "dyse",
          "kuo" => "dimis",
          "o" => "dys"
        ),
    ),
    "uo" => array(
        "singular" => array(
          "kas" => "uo",
          "ko" => "ers",
          "ką" => "erį",
          "kam" => "eriai",
          "kame" => "eryje",
          "kuo" => "erimi",
          "o" => "erie"
        ),
        "plural" => array(
          "kas" => "erys",
          "ko" => array("hard" => "erų", "soft" => "erų"),
          "ką" => "eris",
          "kam" => "erims",
          "kame" => "eryse",
          "kuo" => "erimis",
          "o" => "erys"
        ),
    ),
    "ė" => array(
        "singular" => array(
          "kas" => "ė",
          "ko" => "ers",
          "ką" => "erį",
          "kam" => "eriai",
          "kame" => "eryje",
          "kuo" => "erimi",
          "o" => "erie"
        ),
        "plural" => array(
          "kas" => "erys",
          "ko" => array("hard" => "erų", "soft" => "erų"),
          "ką" => "eris",
          "kam" => "erims",
          "kame" => "eryse",
          "kuo" => "erimis",
          "o" => "erys"
        ),
    ),
  );

  protected $_particularEndings = array(
    "šuo" => array(
        "singular" => array(
          "kas" => "šuo",
          "ko" => "šuns",
          "ką" => "šunį",
          "kam" => "šuniui",
          "kame" => "šunyje",
          "kuo" => "šuniu",
          "o" => "šunie"
        ),
        "plural" => array(
          "kas" => "šunys",
          "ko" => "šunų",
          "ką" => "šunis",
          "kam" => "šunims",
          "kame" => "šunyse",
          "kuo" => "šunimis",
          "o" => "šunys"
        )
     ),
    "mėnuo" => array(
        "singular" => array(
          "kas" => "mėnuo",
          "ko" => "mėnesio",
          "ką" => "mėnesį",
          "kam" => "mėnesiui",
          "kame" => "mėnesyje",
          "kuo" => "mėnesiu",
          "o" => "mėnesi"
        ),
        "plural" => array(
          "kas" => "mėnesiai",
          "ko" => "mėnesių",
          "ką" => "mėnesius",
          "kam" => "mėnesiams",
          "kame" => "mėnesiuose",
          "kuo" => "mėnesiais",
          "o" => "mėnesiai"
        )
     ),
    "žmogus" => array(
        "singular" => array(
          "kas" => "žmogus",
          "ko" => "žmogaus",
          "ką" => "žmogų",
          "kam" => "žmogui",
          "kame" => "žmoguje",
          "kuo" => "žmogumi",
          "o" => "žmogaus"
        ),
        "plural" => array(
          "kas" => "žmonės",
          "ko" => "žmonių",
          "ką" => "žmones",
          "kam" => "žmonėms",
          "kame" => "žmonėse",
          "kuo" => "žmonėmis",
          "o" => "žmonės"
        )
     ),
    "petys" => array(
        "singular" => array(
          "kas" => "petys",
          "ko" => "peties",
          "ką" => "petį",
          "kam" => "pečiui",
          "kame" => "petyje",
          "kuo" => "petimi / pečiu",
          "o" => "pety"
        ),
        "plural" => array(
          "kas" => "pečiai",
          "ko" => "pečių",
          "ką" => "pečius",
          "kam" => "pečiams",
          "kame" => "pečiuose",
          "kuo" => "pečiais",
          "o" => "pečiai"
        )
     ),
  );

  private function getRegularDeclensions($root, $ending)
  {
      return array(
        "singular" => array(
          "kas" => $root . $this->_regularEndings[$ending]["singular"]["kas"],
          "ko" => $root . $this->_regularEndings[$ending]["singular"]["ko"],
          "ką" => $root . $this->_regularEndings[$ending]["singular"]["ką"],
          "kam" => $root . $this->_regularEndings[$ending]["singular"]["kam"],
          "kame" => $root . $this->_regularEndings[$ending]["singular"]["kame"],
          "kuo" => $root . $this->_regularEndings[$ending]["singular"]["kuo"],
          "o" => $root . $this->_regularEndings[$ending]["singular"]["o"],
        ),
        "plural" => array(
          "kas" => $root . $this->_regularEndings[$ending]["plural"]["kas"],
          "ko" => $root . $this->_regularEndings[$ending]["plural"]["ko"],
          "ką" => $root . $this->_regularEndings[$ending]["plural"]["ką"],
          "kam" => $root . $this->_regularEndings[$ending]["plural"]["kam"],
          "kame" => $root . $this->_regularEndings[$ending]["plural"]["kame"],
          "kuo" => $root . $this->_regularEndings[$ending]["plural"]["kuo"],
          "o" => $root . $this->_regularEndings[$ending]["plural"]["o"],
        )
      );
  }

  private function getVDeclensions($root, $ending, $hardship)
  {
      return array(
        "singular" => array(
          "kas" => $root . $this->_vEndings[$ending]["singular"]["kas"],
          "ko" => $root . $this->_vEndings[$ending]["singular"]["ko"],
          "ką" => $root . $this->_vEndings[$ending]["singular"]["ką"],
          "kam" => $root . $this->_vEndings[$ending]["singular"]["kam"],
          "kame" => $root . $this->_vEndings[$ending]["singular"]["kame"],
          "kuo" => $root . $this->_vEndings[$ending]["singular"]["kuo"],
          "o" => $root . $this->_vEndings[$ending]["singular"]["o"],
        ),
        "plural" => array(
          "kas" => $root . $this->_vEndings[$ending]["plural"]["kas"],
          "ko" => $root . $this->_vEndings[$ending]["plural"]["ko"][$hardship],
          "ką" => $root . $this->_vEndings[$ending]["plural"]["ką"],
          "kam" => $root . $this->_vEndings[$ending]["plural"]["kam"],
          "kame" => $root . $this->_vEndings[$ending]["plural"]["kame"],
          "kuo" => $root . $this->_vEndings[$ending]["plural"]["kuo"],
          "o" => $root . $this->_vEndings[$ending]["plural"]["o"],
        )
      );
  }

  private function getMDeclensions($root, $ending, $hardship)
  {
      $singRoot = $root;
      if ($this->_mEndings[$ending]["singular"]["kas"] == "") {
          $singRoot = "";
      }
      return array(
        "singular" => array(
          "kas" => $singRoot . $this->_mEndings[$ending]["singular"]["kas"],
          "ko" => $singRoot . $this->_mEndings[$ending]["singular"]["ko"],
          "ką" => $singRoot . $this->_mEndings[$ending]["singular"]["ką"],
          "kam" => $singRoot . $this->_mEndings[$ending]["singular"]["kam"],
          "kame" => $singRoot . $this->_mEndings[$ending]["singular"]["kame"],
          "kuo" => $singRoot . $this->_mEndings[$ending]["singular"]["kuo"],
          "o" => $singRoot . $this->_mEndings[$ending]["singular"]["o"],
        ),
        "plural" => array(
          "kas" => $root . $this->_mEndings[$ending]["plural"]["kas"],
          "ko" => $root . $this->_mEndings[$ending]["plural"]["ko"][$hardship],
          "ką" => $root . $this->_mEndings[$ending]["plural"]["ką"],
          "kam" => $root . $this->_mEndings[$ending]["plural"]["kam"],
          "kame" => $root . $this->_mEndings[$ending]["plural"]["kame"],
          "kuo" => $root . $this->_mEndings[$ending]["plural"]["kuo"],
          "o" => $root . $this->_mEndings[$ending]["plural"]["o"],
        )
      );
  }

  private function getParticularDeclensions($word)
  {
      return $this->_particularEndings[$word];
  }
  
  /**
   * Generate all declensions for a given noun of regular type.
   * @param string $noun The input noun, in nominative singular 
   * and lowercase.
   * @return array containing all the declensions,
   * in singular and plural forms.
   */
  private function generateRegularDeclensions($noun)
  {
      // Possible endings
      $endings = array(
          "ukas", "jas", "ias", "as", "a", "dė", "tė", "ė",
          "ius", "jus", "us", "dis", "tis", "jis", "is",
          "dys", "jys", "tys", "ys", "ti"
      );
      
      foreach ($endings as $ending) {
          if (preg_match('/(.*)'. $ending . '$/', $noun, $matches)) {
              $root = $matches[1];
              return $this->getRegularDeclensions($root, $ending);
          }
      }

      return "";
  }

 /**
   * Generate all declensions for a given noun of "V" type.
   * @param string $noun The input noun, in nominative singular
   * and lowercase.
   * @param string $hardshipFlag whether to soften or not the plural genitive.
   * @return array containing all the declensions,
   * in singular and plural forms.
   */
  private function generateVDeclensions($noun, $hardshipFlag)
  {
      // Possible endings
      $endings = array("tis", "is", "uo");

      foreach ($endings as $ending) {
          if (preg_match('/(.*)'. $ending . '$/', $noun, $matches)) {
              $root = $matches[1];
              return $this->getVDeclensions($root, $ending, $hardshipFlag);
          }
      }

      return "";
  }

 /**
   * Generate all declensions for a given noun of "M" type.
   * @param string $noun The input noun, in nominative singular
   * and lowercase.
   * @param string $hardshipFlag whether to soften or not the plural genitive.
   * @return array containing all the declensions,
   * in singular and plural forms.
   */
  private function generateMDeclensions($noun, $hardshipFlag)
  {
      // Possible endings:
      $endings = array(
          "tis", "dis", "is", "tys", "dys", "ys", "uo", "ė"
      );

      foreach ($endings as $ending) {
          if (preg_match('/(.*)'. $ending . '$/', $noun, $matches)) {
              $root = $matches[1];
              return $this->getMDeclensions($root, $ending, $hardshipFlag);
          }
      }

      return "";
  }

  /**
   * Generate all declensions for a given noun.
   * @param string $noun The input noun, in nominative singular.
   * @return array containing all the declensions,
   * in singular and plural forms.
   */
  public function generateDeclensions($noun)
  {
      //echo "NOUN: $noun\n";
      $nounToCheck = trim(mb_strtolower($noun, 'UTF-8'));
      
      //echo "NOUN TO CHECK: '$nounToCheck'\n";
      
      $wordTypes = $this->_wordTypes->getWordType($nounToCheck);
      
      // Get the "hardship flag" for certain types of nouns
      $hardshipFlag = "hard";
      if (in_array(LtWordTypes::SOFT_GENITIVE_NOUN, $wordTypes)) {
          $hardshipFlag = "soft";
      }
      if (in_array(LtWordTypes::HARD_GENITIVE_NOUN, $wordTypes)) {
          $hardshipFlag = "hard";
      }
      //echo "WORD TYPE: $wordType\n";

      $particularWords = array('šuo', 'mėnuo', 'žmogus', 'petys');
      
      foreach ($particularWords as $particularWord) {
          if ($nounToCheck == $particularWord) {
              return $this->getParticularDeclensions($particularWord);
          }
      }

      if (in_array(LtWordTypes::IRREGULAR_MASCULINE_NOUN, $wordTypes)) {
          return $this->generateVDeclensions($nounToCheck, $hardshipFlag);
      }
      
      if (in_array(LtWordTypes::IRREGULAR_FEMENINE_NOUN, $wordTypes)) {
          return $this->generateMDeclensions($nounToCheck, $hardshipFlag);
      }
      
      if (in_array(LtWordTypes::REGULAR_NOUN, $wordTypes)) {
          return $this->generateRegularDeclensions($nounToCheck);
      }
      
      return $this->generateRegularDeclensions($nounToCheck);
  }
  
  public function __construct(LtWordTypes $ltWordTypes)
  {
      $this->_wordTypes = $ltWordTypes;
  }

}
