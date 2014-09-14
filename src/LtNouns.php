<?php 
namespace LtWords\LtNouns;
 
/**
 * Class to generate noun declensions in Lithuanian language.
 */
class LtNouns
{
  private $_substitutionsTable = array(
    "ti" => "či",
    "di" => "dži"
  );

  private function performPhoneticalSubstitutions($word)
  {
      $replacedWord = $word;
      foreach ($this->_substitutionsTable as $pattern => $replacement) {
          $replacedWord = str_replace($pattern, $replacement, $replacedWord);
      }
      return $replacedWord;
  }

  private function generateDeclensionsForE($root)
  {
      return array(
        "singular" => array(
          "kas" => $this->performPhoneticalSubstitutions($root . "ė"),
          "ko" => $this->performPhoneticalSubstitutions($root .  "ės"),
          "ką" => $this->performPhoneticalSubstitutions($root . "ę"),
          "kam" => $this->performPhoneticalSubstitutions($root . "ei"),
          "kame" => $this->performPhoneticalSubstitutions($root . "ėje"),
          "kuo" => $this->performPhoneticalSubstitutions($root . "e"),
          "o" => $this->performPhoneticalSubstitutions($root . "e")
        ),
        "plural" => array(
          "kas" => $this->performPhoneticalSubstitutions($root . "ės"),
          "ko" => $this->performPhoneticalSubstitutions($root . "ių"),
          "ką" => $this->performPhoneticalSubstitutions($root . "es"),
          "kam" => $this->performPhoneticalSubstitutions($root . "ėms"),
          "kame" => $this->performPhoneticalSubstitutions($root . "ėse"),
          "kuo" => $this->performPhoneticalSubstitutions($root . "ėmis"),
          "o" => $this->performPhoneticalSubstitutions($root . "ės")
        )
      );
  }

  private function generateDeclensionsForA($root)
  {
      return array(
        "singular" => array(
          "kas" => $this->performPhoneticalSubstitutions($root . "a"),
          "ko" => $this->performPhoneticalSubstitutions($root .  "os"),
          "ką" => $this->performPhoneticalSubstitutions($root . "ą"),
          "kam" => $this->performPhoneticalSubstitutions($root . "ai"),
          "kame" => $this->performPhoneticalSubstitutions($root . "oje"),
          "kuo" => $this->performPhoneticalSubstitutions($root . "a"),
          "o" => $this->performPhoneticalSubstitutions($root . "a")
        ),
        "plural" => array(
          "kas" => $this->performPhoneticalSubstitutions($root . "os"),
          "ko" => $this->performPhoneticalSubstitutions($root . "ų"),
          "ką" => $this->performPhoneticalSubstitutions($root . "as"),
          "kam" => $this->performPhoneticalSubstitutions($root . "oms"),
          "kame" => $this->performPhoneticalSubstitutions($root . "ose"),
          "kuo" => $this->performPhoneticalSubstitutions($root . "omis"),
          "o" => $this->performPhoneticalSubstitutions($root . "os")
        )
      );
  }

  private function generateDeclensionsForAs($root)
  {
      return array(
        "singular" => array(
          "kas" => $this->performPhoneticalSubstitutions($root . "as"),
          "ko" => $this->performPhoneticalSubstitutions($root .  "o"),
          "ką" => $this->performPhoneticalSubstitutions($root . "ą"),
          "kam" => $this->performPhoneticalSubstitutions($root . "ui"),
          "kame" => $this->performPhoneticalSubstitutions($root . "e"),
          "kuo" => $this->performPhoneticalSubstitutions($root . "u"),
          "o" => $this->performPhoneticalSubstitutions($root . "e")
        ),
        "plural" => array(
          "kas" => $this->performPhoneticalSubstitutions($root . "ai"),
          "ko" => $this->performPhoneticalSubstitutions($root . "ų"),
          "ką" => $this->performPhoneticalSubstitutions($root . "us"),
          "kam" => $this->performPhoneticalSubstitutions($root . "ams"),
          "kame" => $this->performPhoneticalSubstitutions($root . "uose"),
          "kuo" => $this->performPhoneticalSubstitutions($root . "ais"),
          "o" => $this->performPhoneticalSubstitutions($root . "ai")
        )
      );
  }
 
  private function generateDeclensionsForIas($root)
  {
      return array(
        "singular" => array(
          "kas" => $this->performPhoneticalSubstitutions($root . "ias"),
          "ko" => $this->performPhoneticalSubstitutions($root .  "io"),
          "ką" => $this->performPhoneticalSubstitutions($root . "ią"),
          "kam" => $this->performPhoneticalSubstitutions($root . "iui"),
          "kame" => $this->performPhoneticalSubstitutions($root . "yje"),
          "kuo" => $this->performPhoneticalSubstitutions($root . "iu"),
          "o" => $this->performPhoneticalSubstitutions($root . "y")
        ),
        "plural" => array(
          "kas" => $this->performPhoneticalSubstitutions($root . "iai"),
          "ko" => $this->performPhoneticalSubstitutions($root . "ių"),
          "ką" => $this->performPhoneticalSubstitutions($root . "ius"),
          "kam" => $this->performPhoneticalSubstitutions($root . "iams"),
          "kame" => $this->performPhoneticalSubstitutions($root . "iuose"),
          "kuo" => $this->performPhoneticalSubstitutions($root . "iais"),
          "o" => $this->performPhoneticalSubstitutions($root . "iai")
        )
      );
  }

  private function generateDeclensionsForJas($root)
  {
      return array(
        "singular" => array(
          "kas" => $this->performPhoneticalSubstitutions($root . "jas"),
          "ko" => $this->performPhoneticalSubstitutions($root .  "jo"),
          "ką" => $this->performPhoneticalSubstitutions($root . "ją"),
          "kam" => $this->performPhoneticalSubstitutions($root . "jui"),
          "kame" => $this->performPhoneticalSubstitutions($root . "juje"),
          "kuo" => $this->performPhoneticalSubstitutions($root . "ju"),
          "o" => $this->performPhoneticalSubstitutions($root . "jau")
        ),
        "plural" => array(
          "kas" => $this->performPhoneticalSubstitutions($root . "jai"),
          "ko" => $this->performPhoneticalSubstitutions($root . "jų"),
          "ką" => $this->performPhoneticalSubstitutions($root . "jus"),
          "kam" => $this->performPhoneticalSubstitutions($root . "jams"),
          "kame" => $this->performPhoneticalSubstitutions($root . "juose"),
          "kuo" => $this->performPhoneticalSubstitutions($root . "jais"),
          "o" => $this->performPhoneticalSubstitutions($root . "jai")
        )
      );
  }

  private function generateDeclensionsForUs($root)
  {
      return array(
        "singular" => array(
          "kas" => $this->performPhoneticalSubstitutions($root . "us"),
          "ko" => $this->performPhoneticalSubstitutions($root .  "aus"),
          "ką" => $this->performPhoneticalSubstitutions($root . "ų"),
          "kam" => $this->performPhoneticalSubstitutions($root . "ui"),
          "kame" => $this->performPhoneticalSubstitutions($root . "uje"),
          "kuo" => $this->performPhoneticalSubstitutions($root . "umi"),
          "o" => $this->performPhoneticalSubstitutions($root . "au")
        ),
        "plural" => array(
          "kas" => $this->performPhoneticalSubstitutions($root . "ūs"),
          "ko" => $this->performPhoneticalSubstitutions($root . "ų"),
          "ką" => $this->performPhoneticalSubstitutions($root . "us"),
          "kam" => $this->performPhoneticalSubstitutions($root . "ums"),
          "kame" => $this->performPhoneticalSubstitutions($root . "uose"),
          "kuo" => $this->performPhoneticalSubstitutions($root . "umis"),
          "o" => $this->performPhoneticalSubstitutions($root . "ūs")
        )
      );
  }

  private function generateDeclensionsForIus($root)
  {
      return array(
        "singular" => array(
          "kas" => $this->performPhoneticalSubstitutions($root . "ius"),
          "ko" => $this->performPhoneticalSubstitutions($root .  "iaus"),
          "ką" => $this->performPhoneticalSubstitutions($root . "ių"),
          "kam" => $this->performPhoneticalSubstitutions($root . "iui"),
          "kame" => $this->performPhoneticalSubstitutions($root . "iuje"),
          "kuo" => $this->performPhoneticalSubstitutions($root . "iumi"),
          "o" => $this->performPhoneticalSubstitutions($root . "iau")
        ),
        "plural" => array(
          "kas" => $this->performPhoneticalSubstitutions($root . "iai"),
          "ko" => $this->performPhoneticalSubstitutions($root . "ių"),
          "ką" => $this->performPhoneticalSubstitutions($root . "ius"),
          "kam" => $this->performPhoneticalSubstitutions($root . "iams"),
          "kame" => $this->performPhoneticalSubstitutions($root . "iuose"),
          "kuo" => $this->performPhoneticalSubstitutions($root . "iais"),
          "o" => $this->performPhoneticalSubstitutions($root . "iai")
        )
      );
  }

  private function generateDeclensionsForJus($root)
  {
      return array(
        "singular" => array(
          "kas" => $this->performPhoneticalSubstitutions($root . "jus"),
          "ko" => $this->performPhoneticalSubstitutions($root .  "jaus"),
          "ką" => $this->performPhoneticalSubstitutions($root . "jų"),
          "kam" => $this->performPhoneticalSubstitutions($root . "jui"),
          "kame" => $this->performPhoneticalSubstitutions($root . "juje"),
          "kuo" => $this->performPhoneticalSubstitutions($root . "jumi"),
          "o" => $this->performPhoneticalSubstitutions($root . "jau")
        ),
        "plural" => array(
          "kas" => $this->performPhoneticalSubstitutions($root . "jūs"),
          "ko" => $this->performPhoneticalSubstitutions($root . "jų"),
          "ką" => $this->performPhoneticalSubstitutions($root . "jus"),
          "kam" => $this->performPhoneticalSubstitutions($root . "jams"),
          "kame" => $this->performPhoneticalSubstitutions($root . "juose"),
          "kuo" => $this->performPhoneticalSubstitutions($root . "jais"),
          "o" => $this->performPhoneticalSubstitutions($root . "jūs")
        )
      );
  }

  /**
   * Generate all declensions for a given noun.
   * The input must be in nominative singular.
   * The output will be an array containing all the declensions,
   * in singular and plural forms.
   */
  public function generateDeclensions($noun)
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

      return "";
  }
}
