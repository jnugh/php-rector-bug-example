Run:
`vendor/bin/rector process test.php -vvv`

Output:

```
[parsing] test.php
[refactoring] test.php
    [applying] Rector\DeadCode\Rector\Node\RemoveNonExistingVarAnnotationRector
    [applying] Rector\DeadCode\Rector\Stmt\RemoveUnreachableStatementRector

In NodeAnnotationReader.php line 101:

  [Rector\Core\Exception\ShouldNotHappenException]
  Look at "Rector\BetterPhpDocParser\AnnotationReader\NodeAnnotationReader::readPropertyAnnotation()" on line 101


Exception trace:
  at /Users/jonas/Documents/Dev/rector-bug/vendor/rector/rector/packages/BetterPhpDocParser/AnnotationReader/NodeAnnotationReader.php:101
 Rector\BetterPhpDocParser\AnnotationReader\NodeAnnotationReader->readPropertyAnnotation() at /Users/jonas/Documents/Dev/rector-bug/vendor/rector/rector/packages/BetterPhpDocParser/AnnotationReader/NodeAnnotationReader.php:66
 Rector\BetterPhpDocParser\AnnotationReader\NodeAnnotationReader->readAnnotation() at /Users/jonas/Documents/Dev/rector-bug/vendor/rector/rector-doctrine/src/PhpDoc/NodeFactory/MultiPhpDocNodeFactory.php:118
 Rector\Doctrine\PhpDoc\NodeFactory\MultiPhpDocNodeFactory->createFromNodeAndTokens() at /Users/jonas/Documents/Dev/rector-bug/vendor/rector/rector/packages/BetterPhpDocParser/PhpDocParser/BetterPhpDocParser.php:173
 Rector\BetterPhpDocParser\PhpDocParser\BetterPhpDocParser->parseTagValue() at /Users/jonas/Documents/Dev/rector-bug/vendor/rector/rector/packages/BetterPhpDocParser/PhpDocParser/BetterPhpDocParser.php:150
 Rector\BetterPhpDocParser\PhpDocParser\BetterPhpDocParser->parseTag() at /Users/jonas/Documents/Dev/rector-bug/vendor/phpstan/phpdoc-parser/src/Parser/PhpDocParser.php:67
 PHPStan\PhpDocParser\Parser\PhpDocParser->parseChild() at n/a:n/a
 ReflectionMethod->invokeArgs() at /Users/jonas/Documents/Dev/rector-bug/vendor/symplify/package-builder/src/Reflection/PrivatesCaller.php:32
 Symplify\PackageBuilder\Reflection\PrivatesCaller->callPrivateMethod() at /Users/jonas/Documents/Dev/rector-bug/vendor/rector/rector/packages/BetterPhpDocParser/PhpDocParser/BetterPhpDocParser.php:211
 Rector\BetterPhpDocParser\PhpDocParser\BetterPhpDocParser->parseChildAndStoreItsPositions() at /Users/jonas/Documents/Dev/rector-bug/vendor/rector/rector/packages/BetterPhpDocParser/PhpDocParser/BetterPhpDocParser.php:119
 Rector\BetterPhpDocParser\PhpDocParser\BetterPhpDocParser->parse() at /Users/jonas/Documents/Dev/rector-bug/vendor/rector/rector/packages/BetterPhpDocParser/PhpDocInfo/PhpDocInfoFactory.php:156
 Rector\BetterPhpDocParser\PhpDocInfo\PhpDocInfoFactory->parseTokensToPhpDocNode() at /Users/jonas/Documents/Dev/rector-bug/vendor/rector/rector/packages/BetterPhpDocParser/PhpDocInfo/PhpDocInfoFactory.php:126
 Rector\BetterPhpDocParser\PhpDocInfo\PhpDocInfoFactory->createFromNode() at /Users/jonas/Documents/Dev/rector-bug/vendor/rector/rector/packages/BetterPhpDocParser/PhpDocInfo/PhpDocInfoFactory.php:93
 Rector\BetterPhpDocParser\PhpDocInfo\PhpDocInfoFactory->createFromNodeOrEmpty() at /Users/jonas/Documents/Dev/rector-bug/vendor/rector/rector/src/Exclusion/ExclusionManager.php:61
 Rector\Core\Exclusion\ExclusionManager->hasNoRectorPhpDocTagMatch() at /Users/jonas/Documents/Dev/rector-bug/vendor/rector/rector/src/Exclusion/ExclusionManager.php:44
 Rector\Core\Exclusion\ExclusionManager->isNodeSkippedByRector() at /Users/jonas/Documents/Dev/rector-bug/vendor/rector/rector/src/Rector/AbstractRector.php:519
 Rector\Core\Rector\AbstractRector->shouldSkipCurrentNode() at /Users/jonas/Documents/Dev/rector-bug/vendor/rector/rector/src/Rector/AbstractRector.php:291
 Rector\Core\Rector\AbstractRector->enterNode() at /Users/jonas/Documents/Dev/rector-bug/vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php:200
 PhpParser\NodeTraverser->traverseArray() at /Users/jonas/Documents/Dev/rector-bug/vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php:114
 PhpParser\NodeTraverser->traverseNode() at /Users/jonas/Documents/Dev/rector-bug/vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php:223
 PhpParser\NodeTraverser->traverseArray() at /Users/jonas/Documents/Dev/rector-bug/vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php:114
 PhpParser\NodeTraverser->traverseNode() at /Users/jonas/Documents/Dev/rector-bug/vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php:223
 PhpParser\NodeTraverser->traverseArray() at /Users/jonas/Documents/Dev/rector-bug/vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php:91
 PhpParser\NodeTraverser->traverse() at /Users/jonas/Documents/Dev/rector-bug/vendor/rector/rector/src/PhpParser/NodeTraverser/RectorNodeTraverser.php:89
 Rector\Core\PhpParser\NodeTraverser\RectorNodeTraverser->traverse() at /Users/jonas/Documents/Dev/rector-bug/vendor/rector/rector/src/Application/FileProcessor.php:134
 Rector\Core\Application\FileProcessor->refactor() at /Users/jonas/Documents/Dev/rector-bug/vendor/rector/rector/src/Application/RectorApplication.php:238
 Rector\Core\Application\RectorApplication->Rector\Core\Application\{closure}() at /Users/jonas/Documents/Dev/rector-bug/vendor/rector/rector/src/Application/RectorApplication.php:253
 Rector\Core\Application\RectorApplication->tryCatchWrapper() at /Users/jonas/Documents/Dev/rector-bug/vendor/rector/rector/src/Application/RectorApplication.php:239
 Rector\Core\Application\RectorApplication->refactorNodesWithRectors() at /Users/jonas/Documents/Dev/rector-bug/vendor/rector/rector/src/Application/RectorApplication.php:158
 Rector\Core\Application\RectorApplication->runOnPaths() at /Users/jonas/Documents/Dev/rector-bug/vendor/rector/rector/src/Console/Command/ProcessCommand.php:216
 Rector\Core\Console\Command\ProcessCommand->execute() at /Users/jonas/Documents/Dev/rector-bug/vendor/symfony/console/Command/Command.php:256
 Symfony\Component\Console\Command\Command->run() at /Users/jonas/Documents/Dev/rector-bug/vendor/symfony/console/Application.php:971
 Symfony\Component\Console\Application->doRunCommand() at /Users/jonas/Documents/Dev/rector-bug/vendor/symfony/console/Application.php:290
 Symfony\Component\Console\Application->doRun() at /Users/jonas/Documents/Dev/rector-bug/vendor/rector/rector/src/Console/ConsoleApplication.php:81
 Rector\Core\Console\ConsoleApplication->doRun() at /Users/jonas/Documents/Dev/rector-bug/vendor/symfony/console/Application.php:166
 Symfony\Component\Console\Application->run() at /Users/jonas/Documents/Dev/rector-bug/vendor/rector/rector/bin/rector.php:61
 require_once() at /Users/jonas/Documents/Dev/rector-bug/vendor/rector/rector/bin/rector:4

process [-n|--dry-run] [-a|--autoload-file AUTOLOAD-FILE] [-o|--output-format [OUTPUT-FORMAT]] [--no-progress-bar] [--no-diffs] [--output-file OUTPUT-FILE] [--cache-debug] [--clear-cache] [--] [<source>...]
```
