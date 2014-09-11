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
 
  /**
   * Generate all declensions for a given noun.
   * The input must be in nominative singular.
   * The output will be an array containing all the declensions,
   * in singular and plural forms.
   */
  public function generateDeclensions($noun)
  {
      // Possible endings:
      // -ias, -as, -is, -ys, -ia, -a, -ė, -ius, -us, -uo

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
      
      return "";
  }
}
