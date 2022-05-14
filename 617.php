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

// right group - complete
$rightNode7 = new TreeNode(7);
$rightNode3 = new TreeNode(3,null,$rightNode7);
$rightNode4 = new TreeNode(4);
$rightNode1 = new TreeNode(1,null,$rightNode4);
$rightNode2 = new TreeNode(2,$rightNode1,$rightNode3);
// left group - complete
$leftNode5 = new TreeNode(5);
$leftNode3 = new TreeNode(3,$leftNode5);
$leftNode2 = new TreeNode(2);
$leftNode1 = new TreeNode(1,$leftNode3,$leftNode2);

class Solution
{
    const ROOT_NODE_ID = 'root';
    const RELATION_LEFT = 'left';
    const RELATION_RIGHT = 'right';

    /** @var TreeNode[] $savedNodes */
    public array $savedNodes = [];

    /**
     * @param TreeNode|null $root1
     * @param TreeNode|null $root2
     * @return TreeNode
     */
    function mergeTrees(TreeNode|null $root1, TreeNode|null $root2) : TreeNode
    {
        $this->combineTrees($root1, $root2);

        return $this->getRootNode();
    }

    protected function getRootNode(): TreeNode
    {
        return $this->savedNodes[self::ROOT_NODE_ID];
    }

    protected function combineTrees(
        TreeNode|null $node1,
        TreeNode|null $node2,
        $parentIdGiven = null,
        $relation = null
    ) : void
    {
        $createdNodeID = $parentIdGiven === null ? self::ROOT_NODE_ID : uniqid();

        if ($node1 && $node2) {
            $primaryNode = $node1;
            $secondaryNode = $node2;
            $secondaryNodeLeft = $secondaryNode->left;
            $secondaryNodeRight = $secondaryNode->right;
        } else {
            $primaryNode = $node1 ? $node1 : $node2;
            $secondaryNode = null;
            $secondaryNodeLeft = null;
            $secondaryNodeRight = null;
        }

        $newNode = new TreeNode();
        $newNode->val = $secondaryNode ? $secondaryNode->val + $primaryNode->val : $primaryNode->val;
        $this->savedNodes[$createdNodeID] = $newNode;

        if ($parentIdGiven !== null) {
            $this->savedNodes[$parentIdGiven]->{$relation} = $newNode;
        }
        
        if ( $primaryNode->left || $secondaryNodeLeft ) {
            $this->combineTrees($primaryNode->left, $secondaryNodeLeft, $createdNodeID, self::RELATION_LEFT);
        }
        if ( $primaryNode->right || $secondaryNodeRight ) {
            $this->combineTrees($primaryNode->right, $secondaryNodeRight, $createdNodeID, self::RELATION_RIGHT);
        }
    }
}

$Solution = new Solution;
$res = $Solution->mergeTrees($leftNode1, $rightNode2);