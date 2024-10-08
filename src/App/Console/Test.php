<?php
namespace App\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

/**
 * @author Tropotek <info@tropotek.com>
 */
class Test extends \Bs\Console\Console
{

    /**
     *
     */
    protected function configure(): void
    {
        $this->setName('test')
            ->setAliases(array('t'))
            //->addArgument('filename', InputArgument::REQUIRED, 'The Database backup file (tgz) generated by tkDbBackup.')
            //->addOption('noLibs', 'X', InputOption::VALUE_NONE, 'Do not show the ttek libs.')
            ->setDescription('This is a test script only');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        if (!$this->getConfig()->isDebug()) {
            $this->writeError('Error: Only run this command in a debug environment.');
            return Command::FAILURE;
        }


        $this->writeRed('writeRed');
        $this->writeGrey('writeGrey');
        $this->writeBlue('writeBlue');
        $this->writeStrongBlue('writeStrongBlue');
        $this->writeStrong('writeStrong');
        $this->writeInfo('writeInfo');
        $this->writeStrongInfo('writeStrongInfo');
        $this->writeComment('writeComment');
        $this->writeQuestion('writeQuestion');
        $this->writeError('writeError');
        $this->write('write');


        $output->writeln('Complete!!!');
        return Command::SUCCESS;
    }



}
