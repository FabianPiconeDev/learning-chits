<?php declare(strict_types=1);

namespace FabianPiconeDev\Web\Controller;

use League\Tactician\CommandBus;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface as TemplateEngine;

final class ChitInsertionController
{
    private $commandBus;
    private $templateEngine;

    public function __construct(CommandBus $commandBus, TemplateEngine $templateEngine)
    {
        $this->commandBus = $commandBus;
        $this->templateEngine = $templateEngine;
    }

    public function showInsertForm(): Response
    {
        return $this->templateEngine->renderResponse('insert.html.twig');
    }
}