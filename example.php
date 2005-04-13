<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
/**
 * Example file for PEAR_PackageFileManager_GUI_Gtk.
 *
 * This file serves as a useage example and documentation for 
 * PEAR_PackageFileManager_GUI_Gtk (PFM_Gtk). PFM_Gtk is a GUI written
 * using PHP-GTK 1.0.1. PFM_Gtk helps developers write and maintain
 * PEAR package.xml files. The class is designed as a stand alone 
 * application but does not have to function that way. It can be embedded
 * in other applications if needed. The original version was written for
 * PEAR-1.3.5 and PEAR_PackageFileManager-1.3.0. Any given version of 
 * PFM_Gtk may or may not implement all the features of the most recent
 * stable versions of PEAR or PEAR_PackageFileManager.
 *
 * @author     Scott Mattocks
 * @category   PEAR
 * @package    PEAR_PackageFileManager_GUI_Gtk
 * @copyright  &copy; (c) Copyright 2005 Scott Mattocks
 * @license    PHP 3.0
 *
 * Sorry about all of that other stuff. It needed to be added for 
 * completeness' sake. You are reading this file because you want
 * to know how to use PFM_Gtk. It's easy. In fact you can just 
 * execute this file if you want. If you don't want to, there are
 * three steps.
 *
 *  1) Instantiate the class.
 *     require_once 'PEAR/PackageFileManager/GUI/Gtk.php';
 *     $pfmGtk =& new PEAR_PackageFileManager_GUI_Gtk();
 *  
 *  2) Show the main window.
 *     $pfmGtk->show();
 *
 *  3) Start the main loop.
 *     gtk::main()
 *
 * That's it. Your window will appear and you can go to town 
 * creating all sorts of package files.
 *
 * How do you actually create the package file? Well, that is 
 * just as easy. Start off by selecting the directory of your
 * package. If there is already a package.xml file there, the
 * application will use it as a base and append any new info
 * to it. To pick the directory click the "Select" button on
 * the "Package" tab. If you are creating a new package file
 * you will need to give your package a name. If you are not
 * sure what to name your package consult the PEAR website for
 * the standard naming conventions. A base install directory
 * must be defined regardless of whether or not you are creating
 * a new package file. This is a restirction imposed by the 
 * PEAR_PackageFileManager class or maybe even PEAR itself. 
 * New packages also require a one line summary and a description.
 * When you hit submit you will be taken to the release page.
 *
 * On this page enter the requested information. Again consult
 * the PEAR website if you are not familiar with the numbering
 * conventions. Release notes are just that. Notes relating to
 * this release only. When you hit submit you will be taken to
 * on of two pages. Either the warnings page, letting you know
 * that something isn't right, or the Maintainers page.
 *
 * At the Maintainers page, enter the information for each of
 * the packages maintainers. If you are updating a package.xml
 * file, you do not need to add the maintainers again. If you
 * click "Add Maintainer" you will either see a message saying
 * that the addition was successful, or you will be taken to 
 * the warnings page. You cannot add any maintainers until you
 * have set the package and release options.
 */

// Check for the gtk extension.
if (!extension_loaded('gtk')) {
    dl( 'php_gtk.' . PHP_SHLIB_SUFFIX);
}

require_once 'PEAR/PackageFileManager/GUI/Gtk.php';
$pfmGtk =& new PEAR_PackageFileManager_GUI_Gtk();
$pfmGtk->show();
gtk::main();

?>