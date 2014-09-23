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

  private function generateDeclensionsForE($root)
  {
      return array(
        "singular" => array(
          "kas" => $root . "ė",
          "ko" => $root .  "ės",
          "ką" => $root . "ę",
          "kam" => $root . "ei",
          "kame" => $root . "ėje",
          "kuo" => $root . "e",
          "o" => $root . "e"
        ),
        "plural" => array(
          "kas" => $root . "ės",
          "ko" => $root . "ių",
          "ką" => $root . "es",
          "kam" => $root . "ėms",
          "kame" => $root . "ėse",
          "kuo" => $root . "ėmis",
          "o" => $root . "ės"
        )
      );
  }

  private function generateDeclensionsForTe($root)
  {
      return array(
        "singular" => array(
          "kas" => $root . "tė",
          "ko" => $root .  "tės",
          "ką" => $root . "tę",
          "kam" => $root . "tei",
          "kame" => $root . "tėje",
          "kuo" => $root . "te",
          "o" => $root . "te"
        ),
        "plural" => array(
          "kas" => $root . "tės",
          "ko" => $root . "čių",
          "ką" => $root . "tes",
          "kam" => $root . "tėms",
          "kame" => $root . "tėse",
          "kuo" => $root . "tėmis",
          "o" => $root . "tės"
        )
      );
  }

  private function generateDeclensionsForDe($root)
  {
      return array(
        "singular" => array(
          "kas" => $root . "dė",
          "ko" => $root .  "dės",
          "ką" => $root . "dę",
          "kam" => $root . "dei",
          "kame" => $root . "dėje",
          "kuo" => $root . "de",
          "o" => $root . "de"
        ),
        "plural" => array(
          "kas" => $root . "dės",
          "ko" => $root . "džių",
          "ką" => $root . "des",
          "kam" => $root . "dėms",
          "kame" => $root . "dėse",
          "kuo" => $root . "dėmis",
          "o" => $root . "dės"
        )
      );
  }

  private function generateDeclensionsForA($root)
  {
      return array(
        "singular" => array(
          "kas" => $root . "a",
          "ko" => $root .  "os",
          "ką" => $root . "ą",
          "kam" => $root . "ai",
          "kame" => $root . "oje",
          "kuo" => $root . "a",
          "o" => $root . "a"
        ),
        "plural" => array(
          "kas" => $root . "os",
          "ko" => $root . "ų",
          "ką" => $root . "as",
          "kam" => $root . "oms",
          "kame" => $root . "ose",
          "kuo" => $root . "omis",
          "o" => $root . "os"
        )
      );
  }

  private function generateDeclensionsForAs($root)
  {
      return array(
        "singular" => array(
          "kas" => $root . "as",
          "ko" => $root .  "o",
          "ką" => $root . "ą",
          "kam" => $root . "ui",
          "kame" => $root . "e",
          "kuo" => $root . "u",
          "o" => $root . "e"
        ),
        "plural" => array(
          "kas" => $root . "ai",
          "ko" => $root . "ų",
          "ką" => $root . "us",
          "kam" => $root . "ams",
          "kame" => $root . "uose",
          "kuo" => $root . "ais",
          "o" => $root . "ai"
        )
      );
  }
 
  private function generateDeclensionsForIas($root)
  {
      return array(
        "singular" => array(
          "kas" => $root . "ias",
          "ko" => $root .  "io",
          "ką" => $root . "ią",
          "kam" => $root . "iui",
          "kame" => $root . "yje",
          "kuo" => $root . "iu",
          "o" => $root . "y"
        ),
        "plural" => array(
          "kas" => $root . "iai",
          "ko" => $root . "ių",
          "ką" => $root . "ius",
          "kam" => $root . "iams",
          "kame" => $root . "iuose",
          "kuo" => $root . "iais",
          "o" => $root . "iai"
        )
      );
  }

  private function generateDeclensionsForJas($root)
  {
      return array(
        "singular" => array(
          "kas" => $root . "jas",
          "ko" => $root .  "jo",
          "ką" => $root . "ją",
          "kam" => $root . "jui",
          "kame" => $root . "juje",
          "kuo" => $root . "ju",
          "o" => $root . "jau"
        ),
        "plural" => array(
          "kas" => $root . "jai",
          "ko" => $root . "jų",
          "ką" => $root . "jus",
          "kam" => $root . "jams",
          "kame" => $root . "juose",
          "kuo" => $root . "jais",
          "o" => $root . "jai"
        )
      );
  }

  private function generateDeclensionsForIs($root)
  {
      return array(
        "singular" => array(
          "kas" => $root . "is",
          "ko" => $root .  "io",
          "ką" => $root . "į",
          "kam" => $root . "iui",
          "kame" => $root . "yje",
          "kuo" => $root . "iu",
          "o" => $root . "i"
        ),
        "plural" => array(
          "kas" => $root . "iai",
          "ko" => $root . "ių",
          "ką" => $root . "ius",
          "kam" => $root . "iams",
          "kame" => $root . "iuose",
          "kuo" => $root . "iais",
          "o" => $root . "iai"
        )
      );
  }

  private function generateDeclensionsForDis($root)
  {
      return array(
        "singular" => array(
          "kas" => $root . "dis",
          "ko" => $root .  "džio",
          "ką" => $root . "dį",
          "kam" => $root . "džiui",
          "kame" => $root . "dyje",
          "kuo" => $root . "džiu",
          "o" => $root . "di"
        ),
        "plural" => array(
          "kas" => $root . "džiai",
          "ko" => $root . "džių",
          "ką" => $root . "džius",
          "kam" => $root . "džiams",
          "kame" => $root . "džiuose",
          "kuo" => $root . "džiais",
          "o" => $root . "džiai"
        )
      );
  }

  private function generateDeclensionsForTis($root)
  {
      return array(
        "singular" => array(
          "kas" => $root . "tis",
          "ko" => $root .  "čio",
          "ką" => $root . "tį",
          "kam" => $root . "čiui",
          "kame" => $root . "tyje",
          "kuo" => $root . "čiu",
          "o" => $root . "ti"
        ),
        "plural" => array(
          "kas" => $root . "čiai",
          "ko" => $root . "čių",
          "ką" => $root . "čius",
          "kam" => $root . "čiams",
          "kame" => $root . "čiuose",
          "kuo" => $root . "čiais",
          "o" => $root . "čiai"
        )
      );
  }

  private function generateDeclensionsForJis($root)
  {
      return array(
        "singular" => array(
          "kas" => $root . "jis",
          "ko" => $root .  "jo",
          "ką" => $root . "jį",
          "kam" => $root . "jui",
          "kame" => $root . "jyje",
          "kuo" => $root . "ju",
          "o" => $root . "ji"
        ),
        "plural" => array(
          "kas" => $root . "jai",
          "ko" => $root . "jų",
          "ką" => $root . "jus",
          "kam" => $root . "jams",
          "kame" => $root . "juose",
          "kuo" => $root . "jais",
          "o" => $root . "jai"
        )
      );
  }

  private function generateDeclensionsForYs($root)
  {
      return array(
        "singular" => array(
          "kas" => $root . "ys",
          "ko" => $root .  "io",
          "ką" => $root . "į",
          "kam" => $root . "iui",
          "kame" => $root . "yje",
          "kuo" => $root . "iu",
          "o" => $root . "y"
        ),
        "plural" => array(
          "kas" => $root . "iai",
          "ko" => $root . "ių",
          "ką" => $root . "ius",
          "kam" => $root . "iams",
          "kame" => $root . "iuose",
          "kuo" => $root . "iais",
          "o" => $root . "iai"
        )
      );
  }

  private function generateDeclensionsForDys($root)
  {
      return array(
        "singular" => array(
          "kas" => $root . "dys",
          "ko" => $root .  "džio",
          "ką" => $root . "dį",
          "kam" => $root . "džiui",
          "kame" => $root . "dyje",
          "kuo" => $root . "džiu",
          "o" => $root . "dy"
        ),
        "plural" => array(
          "kas" => $root . "džiai",
          "ko" => $root . "džių",
          "ką" => $root . "džius",
          "kam" => $root . "džiams",
          "kame" => $root . "džiuose",
          "kuo" => $root . "džiais",
          "o" => $root . "džiai"
        )
      );
  }

  private function generateDeclensionsForJys($root)
  {
      return array(
        "singular" => array(
          "kas" => $root . "jys",
          "ko" => $root .  "jo",
          "ką" => $root . "jį",
          "kam" => $root . "jui",
          "kame" => $root . "jyje",
          "kuo" => $root . "ju",
          "o" => $root . "jy"
        ),
        "plural" => array(
          "kas" => $root . "jai",
          "ko" => $root . "jų",
          "ką" => $root . "jus",
          "kam" => $root . "jams",
          "kame" => $root . "juose",
          "kuo" => $root . "jais",
          "o" => $root . "jai"
        )
      );
  }

  private function generateDeclensionsForTys($root)
  {
      return array(
        "singular" => array(
          "kas" => $root . "tys",
          "ko" => $root .  "čio",
          "ką" => $root . "tį",
          "kam" => $root . "čiui",
          "kame" => $root . "tyje",
          "kuo" => $root . "čiu",
          "o" => $root . "ty"
        ),
        "plural" => array(
          "kas" => $root . "čiai",
          "ko" => $root . "čių",
          "ką" => $root . "čius",
          "kam" => $root . "čiams",
          "kame" => $root . "čiuose",
          "kuo" => $root . "čiais",
          "o" => $root . "čiai"
        )
      );
  }

  private function generateDeclensionsForUs($root)
  {
      return array(
        "singular" => array(
          "kas" => $root . "us",
          "ko" => $root .  "aus",
          "ką" => $root . "ų",
          "kam" => $root . "ui",
          "kame" => $root . "uje",
          "kuo" => $root . "umi",
          "o" => $root . "au"
        ),
        "plural" => array(
          "kas" => $root . "ūs",
          "ko" => $root . "ų",
          "ką" => $root . "us",
          "kam" => $root . "ums",
          "kame" => $root . "uose",
          "kuo" => $root . "umis",
          "o" => $root . "ūs"
        )
      );
  }

  private function generateDeclensionsForIus($root)
  {
      return array(
        "singular" => array(
          "kas" => $root . "ius",
          "ko" => $root .  "iaus",
          "ką" => $root . "ių",
          "kam" => $root . "iui",
          "kame" => $root . "iuje",
          "kuo" => $root . "iumi",
          "o" => $root . "iau"
        ),
        "plural" => array(
          "kas" => $root . "iai",
          "ko" => $root . "ių",
          "ką" => $root . "ius",
          "kam" => $root . "iams",
          "kame" => $root . "iuose",
          "kuo" => $root . "iais",
          "o" => $root . "iai"
        )
      );
  }

  private function generateDeclensionsForJus($root)
  {
      return array(
        "singular" => array(
          "kas" => $root . "jus",
          "ko" => $root .  "jaus",
          "ką" => $root . "jų",
          "kam" => $root . "jui",
          "kame" => $root . "juje",
          "kuo" => $root . "jumi",
          "o" => $root . "jau"
        ),
        "plural" => array(
          "kas" => $root . "jūs",
          "ko" => $root . "jų",
          "ką" => $root . "jus",
          "kam" => $root . "jams",
          "kame" => $root . "juose",
          "kuo" => $root . "jais",
          "o" => $root . "jūs"
        )
      );
  }

  private function generateVDeclensionsForIs($root)
  {
      return array(
        "singular" => array(
          "kas" => $root . "is",
          "ko" => $root .  "ies",
          "ką" => $root . "į",
          "kam" => $root . "iui",
          "kame" => $root . "yje",
          "kuo" => $root . "imi",
          "o" => $root . "ie"
        ),
        "plural" => array(
          "kas" => $root . "ys",
          "ko" => $root . "ių",
          "ką" => $root . "is",
          "kam" => $root . "ims",
          "kame" => $root . "yse",
          "kuo" => $root . "imis",
          "o" => $root . "ys"
        )
      );
  }

  private function generateVDeclensionsForTis($root)
  {
      return array(
        "singular" => array(
          "kas" => $root . "tis",
          "ko" => $root .  "ties",
          "ką" => $root . "tį",
          "kam" => $root . "čiui",
          "kame" => $root . "tyje",
          "kuo" => $root . "timi",
          "o" => $root . "tie"
        ),
        "plural" => array(
          "kas" => $root . "tys",
          "ko" => $root . "tų",
          "ką" => $root . "tis",
          "kam" => $root . "tims",
          "kame" => $root . "tyse",
          "kuo" => $root . "timis",
          "o" => $root . "tys"
        )
      );
  }

  private function generateVDeclensionsForUo($root)
  {
      return array(
        "singular" => array(
          "kas" => $root . "uo",
          "ko" => $root .  "ens",
          "ką" => $root . "enį",
          "kam" => $root . "eniui",
          "kame" => $root . "enyje",
          "kuo" => $root . "eniu",
          "o" => $root . "enie"
        ),
        "plural" => array(
          "kas" => $root . "enys",
          "ko" => $root . "enų",
          "ką" => $root . "enis",
          "kam" => $root . "enims",
          "kame" => $root . "enyse",
          "kuo" => $root . "enimis",
          "o" => $root . "enys"
        )
      );
  }
  
  /**
   * Generate all declensions for a given noun of regular type.
   * @param string $noun The input noun, in nominative singular.
   * @return array containing all the declensions,
   * in singular and plural forms.
   */
  private function generateRegularDeclensions($noun)
  {
      // Possible endings:
      // -jas, -ias, -as, -is, -ys, -ia, -a, -ė, -ius, -us, -uo

      if (preg_match('/(.*)jas$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateDeclensionsForJas($root);
      }

      if (preg_match('/(.*)ias$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateDeclensionsForIas($root);
      }

      if (preg_match('/(.*)as$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateDeclensionsForAs($root);
      }

      if (preg_match('/(.*)a$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateDeclensionsForA($root);
      }
      
      if (preg_match('/(.*)dė$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateDeclensionsForDe($root);
      }

      if (preg_match('/(.*)tė$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateDeclensionsForTe($root);
      }

      if (preg_match('/(.*)ė$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateDeclensionsForE($root);
      }

      if (preg_match('/(.*)ius$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateDeclensionsForIus($root);
      }

      if (preg_match('/(.*)jus$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateDeclensionsForJus($root);
      }

      if (preg_match('/(.*)us$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateDeclensionsForUs($root);
      }

      if (preg_match('/(.*)dis$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateDeclensionsForDis($root);
      }
      
      if (preg_match('/(.*)tis$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateDeclensionsForTis($root);
      }

      if (preg_match('/(.*)jis$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateDeclensionsForJis($root);
      }

      if (preg_match('/(.*)is$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateDeclensionsForIs($root);
      }

      if (preg_match('/(.*)dys$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateDeclensionsForDys($root);
      }

      if (preg_match('/(.*)jys$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateDeclensionsForJys($root);
      }

      if (preg_match('/(.*)tys$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateDeclensionsForTys($root);
      }

      if (preg_match('/(.*)ys$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateDeclensionsForYs($root);
      }

      return "";
  }

 /**
   * Generate all declensions for a given noun of "V" type.
   * @param string $noun The input noun, in nominative singular.
   * @return array containing all the declensions,
   * in singular and plural forms.
   */
  private function generateVDeclensions($noun)
  {
      // Possible endings:
      // -jas, -ias, -as, -is, -ys, -ia, -a, -ė, -ius, -us, -uo

      if (preg_match('/(.*)tis$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateVDeclensionsForTis($root);
      }
      if (preg_match('/(.*)is$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateVDeclensionsForIs($root);
      }
      if (preg_match('/(.*)uo$/', $noun, $matches)) {
          $root = $matches[1];
          return $this->generateVDeclensionsForUo($root);
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
      $wordType = $this->_wordTypes->getWordType($noun);
      
      //echo "WORD TYPE: $wordType\n";

      if ($wordType == LtWordTypes::REGULAR_NOUN) {
          return $this->generateRegularDeclensions($noun);
      }
      
      if ($wordType == LtWordTypes::IRREGULAR_MASCULINE_NOUN) {
          return $this->generateVDeclensions($noun);
      }
  }
  
  public function __construct(LtWordTypes $ltWordTypes)
  {
      $this->_wordTypes = $ltWordTypes;
  }

}
