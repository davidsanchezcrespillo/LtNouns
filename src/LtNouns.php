<?php 
namespace LtWords\LtNouns;
 
/**
 * Class to generate noun declensions in Lithuanian language.
 */
class LtNouns
{
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
      return "";
  }
}
