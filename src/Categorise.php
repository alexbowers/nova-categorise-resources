<?php

namespace AlexBowers\NovaCategoriseResources;

trait Categorise
{
    /**
     * A nova resource can be given a category name.
     *
     * If a category name is provided, then that will act as a label.
     *
     * The label will be standardised, so any changes in capitalisation will be removed
     * and it will be converted into Title case.
     *
     * For example:
     *
     * "Customers Information", "customers information" and "cUStoMERs INFORMATION"
     *
     * all become "Customers Information"
     *
     * If the category is left empty, then all empty resources will get grouped together.
     *
     * If there is only one category, it will not be collapsable, but will instead have a label above it all
     *
     * if there is only one category, and it is empty, then it will act as Nova does by default.
     */
    public static $category;
}
