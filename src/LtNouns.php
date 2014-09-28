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

  private function getVDeclensions($root, $ending, $hardshipFlag)
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
          "ko" => $root . $this->_vEndings[$ending]["plural"]["ko"][$hardshipFlag],
          "ką" => $root . $this->_vEndings[$ending]["plural"]["ką"],
          "kam" => $root . $this->_vEndings[$ending]["plural"]["kam"],
          "kame" => $root . $this->_vEndings[$ending]["plural"]["kame"],
          "kuo" => $root . $this->_vEndings[$ending]["plural"]["kuo"],
          "o" => $root . $this->_vEndings[$ending]["plural"]["o"],
        )
      );
  }

  private function generateMDeclensionsForTis($root, $hardshipFlag)
  {
      $pluralGenitiveEnding = "tų";
      if ($hardshipFlag == "soft") {
          $pluralGenitiveEnding = "čių";
      }
      if ($hardshipFlag == "hard") {
          $pluralGenitiveEnding = "tų";
      }
      
      return array(
        "singular" => array(
          "kas" => $root . "tis",
          "ko" => $root .  "ties",
          "ką" => $root . "tį",
          "kam" => $root . "čiai",
          "kame" => $root . "tyje",
          "kuo" => $root . "timi",
          "o" => $root . "tie"
        ),
        "plural" => array(
          "kas" => $root . "tys",
          "ko" => $root . $pluralGenitiveEnding,
          "ką" => $root . "tis",
          "kam" => $root . "tims",
          "kame" => $root . "tyse",
          "kuo" => $root . "timis",
          "o" => $root . "tys"
        )
      );
  }

  private function generateMDeclensionsForDis($root, $hardshipFlag)
  {
      $pluralGenitiveEnding = "dų";
      if ($hardshipFlag == "soft") {
          $pluralGenitiveEnding = "džių";
      }
      if ($hardshipFlag == "hard") {
          $pluralGenitiveEnding = "dų";
      }

      return array(
        "singular" => array(
          "kas" => $root . "dis",
          "ko" => $root .  "dies",
          "ką" => $root . "dį",
          "kam" => $root . "džiai",
          "kame" => $root . "dyje",
          "kuo" => $root . "dimi",
          "o" => $root . "die"
        ),
        "plural" => array(
          "kas" => $root . "dys",
          "ko" => $root . $pluralGenitiveEnding,
          "ką" => $root . "dis",
          "kam" => $root . "dims",
          "kame" => $root . "dyse",
          "kuo" => $root . "dimis",
          "o" => $root . "dys"
        )
      );
  }

  private function generateMDeclensionsForIs($root, $hardshipFlag)
  {
      $pluralGenitiveEnding = "ų";
      if ($hardshipFlag == "soft") {
          $pluralGenitiveEnding = "ių";
      }
      if ($hardshipFlag == "hard") {
          $pluralGenitiveEnding = "ų";
      }

      return array(
        "singular" => array(
          "kas" => $root . "is",
          "ko" => $root .  "ies",
          "ką" => $root . "į",
          "kam" => $root . "iai",
          "kame" => $root . "yje",
          "kuo" => $root . "imi",
          "o" => $root . "ie"
        ),
        "plural" => array(
          "kas" => $root . "ys",
          "ko" => $root . $pluralGenitiveEnding,
          "ką" => $root . "is",
          "kam" => $root . "ims",
          "kame" => $root . "yse",
          "kuo" => $root . "imis",
          "o" => $root . "ys"
        )
      );
  }

  private function generateMDeclensionsForYs($root, $hardshipFlag)
  {
      $pluralGenitiveEnding = "ų";
      if ($hardshipFlag == "soft") {
          $pluralGenitiveEnding = "ių";
      }
      if ($hardshipFlag == "hard") {
          $pluralGenitiveEnding = "ų";
      }

      return array(
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
          "kas" => $root . "ys",
          "ko" => $root . $pluralGenitiveEnding,
          "ką" => $root . "is",
          "kam" => $root . "ims",
          "kame" => $root . "yse",
          "kuo" => $root . "imis",
          "o" => $root . "ys"
        )
      );
  }

  private function generateMDeclensionsForDys($root, $hardshipFlag)
  {
      $pluralGenitiveEnding = "dų";
      if ($hardshipFlag == "soft") {
          $pluralGenitiveEnding = "džių";
      }
      if ($hardshipFlag == "hard") {
          $pluralGenitiveEnding = "dų";
      }

      return array(
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
          "kas" => $root . "dys",
          "ko" => $root . $pluralGenitiveEnding,
          "ką" => $root . "dis",
          "kam" => $root . "dims",
          "kame" => $root . "dyse",
          "kuo" => $root . "dimis",
          "o" => $root . "dys"
        )
      );
  }
  
  private function generateMDeclensionsForTys($root, $hardshipFlag)
  {
      $pluralGenitiveEnding = "tų";
      if ($hardshipFlag == "soft") {
          $pluralGenitiveEnding = "čių";
      }
      if ($hardshipFlag == "hard") {
          $pluralGenitiveEnding = "tų";
      }

      return array(
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
          "kas" => $root . "tys",
          "ko" => $root . $pluralGenitiveEnding,
          "ką" => $root . "tis",
          "kam" => $root . "tims",
          "kame" => $root . "tyse",
          "kuo" => $root . "timis",
          "o" => $root . "tys"
        )
      );
  }

  private function generateMDeclensionsForUo($root)
  {
      return array(
        "singular" => array(
          "kas" => $root . "uo",
          "ko" => $root .  "ers",
          "ką" => $root . "erį",
          "kam" => $root . "eriai",
          "kame" => $root . "eryje",
          "kuo" => $root . "erimi",
          "o" => $root . "erie"
        ),
        "plural" => array(
          "kas" => $root . "erys",
          "ko" => $root . "erų",
          "ką" => $root . "eris",
          "kam" => $root . "erims",
          "kame" => $root . "eryse",
          "kuo" => $root . "erimis",
          "o" => $root . "erys"
        )
      );
  }

  private function generateMDeclensionsForE($root)
  {
      return array(
        "singular" => array(
          "kas" => $root . "ė",
          "ko" => $root .  "ers",
          "ką" => $root . "erį",
          "kam" => $root . "eriai",
          "kame" => $root . "eryje",
          "kuo" => $root . "erimi",
          "o" => $root . "erie"
        ),
        "plural" => array(
          "kas" => $root . "erys",
          "ko" => $root . "erų",
          "ką" => $root . "eris",
          "kam" => $root . "erims",
          "kame" => $root . "eryse",
          "kuo" => $root . "erimis",
          "o" => $root . "erys"
        )
      );
  }
  
  private function generateDeclensionsForMenuo()
  {
      return array(
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
      );
  }

  private function generateDeclensionsForSuo()
  {
      return array(
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
      );
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
          "jas", "ias", "as", "a", "dė", "tė", "ė", "ius", "jus", "us",
          "dis", "tis", "jis", "is", "dys", "jys", "tys", "ys"
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
      // -jas, -ias, -as, -is, -ys, -ia, -a, -ė, -ius, -us, -uo

      if (preg_match('/(.*)tis$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateMDeclensionsForTis($root, $hardshipFlag);
      }
      if (preg_match('/(.*)dis$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateMDeclensionsForDis($root, $hardshipFlag);
      }
      if (preg_match('/(.*)is$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateMDeclensionsForIs($root, $hardshipFlag);
      }
      if (preg_match('/(.*)tys$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateMDeclensionsForTys($root, $hardshipFlag);
      }
      if (preg_match('/(.*)dys$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateMDeclensionsForDys($root, $hardshipFlag);
      }
      if (preg_match('/(.*)ys$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateMDeclensionsForYs($root, $hardshipFlag);
      }
      if (preg_match('/(.*)uo$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateMDeclensionsForUo($root);
      }
      if (preg_match('/(.*)ė$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateMDeclensionsForE($root);
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
      $nounToCheck = mb_strtolower($noun, 'UTF-8');
      
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

      if ($nounToCheck =='šuo') {
          return $this->generateDeclensionsForSuo();
      }

      if ($nounToCheck == 'mėnuo') {
          return $this->generateDeclensionsForMenuo();
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
      
      return "";
  }
  
  public function __construct(LtWordTypes $ltWordTypes)
  {
      $this->_wordTypes = $ltWordTypes;
  }

}
