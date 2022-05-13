<?php /** @noinspection PhpMultipleClassDeclarationsInspection */

/**
 * Definition for a binary tree node.
 */
class TreeNode
{
    public int $val;
    public TreeNode|null $left = null;
    public TreeNode|null $right = null;

    function __construct($val = 0, $left = null, $right = null) {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

// example 1
//$node9 = new TreeNode(9);
//$node7 = new TreeNode(7);
//$node8 = new TreeNode(8,$node7,$node9);
//$node6 = new TreeNode(6,null,$node8);
//$node1 = new TreeNode(1);
//$node2 = new TreeNode(2,$node1);
//$node4 = new TreeNode(4);
//$node3 = new TreeNode(3,$node2,$node4);
//$node5 = new TreeNode(5,$node3,$node6);

// example 2
$node1 = new TreeNode(1);
$node7 = new TreeNode(7);
$node5 = new TreeNode(5,$node1,$node7);

class Solution
{
    /** @var TreeNode[] $savedNodes */
    public array $savedNodes = [];

    /**
     * @param TreeNode $root
     * @return TreeNode
     */
    function increasingBST(TreeNode $root) : TreeNode
    {
        $this->saveNodes($root);
        $this->sortSavedNodes();

        return $this->getRootNode();
    }

    protected function getRootNode(): TreeNode
    {
        return reset($this->savedNodes);
    }

    protected function sortSavedNodes(): void
    {
        asort($this->savedNodes);
        $lastNodeKey = array_key_last($this->savedNodes);

        foreach ($this->savedNodes as $key => $node) {
            $this->savedNodes[$key]->left = null;
            if ($key == $lastNodeKey) {
                $this->savedNodes[$key]->right = null;
            } else {
                $this->savedNodes[$key]->right = next($this->savedNodes);
            }
        }
    }

    protected function saveNodes(TreeNode $node): void
    {
        $this->savedNodes[$node->val] = $node;

        if ($node->left) {
            $this->saveNodes($node->left);
        }
        if ($node->right) {
            $this->saveNodes($node->right);
        }
    }
}



$Solution = new Solution;
$res = $Solution->increasingBST($node5);