#include <stdio.h>
#include <stdlib.h>

// Node structure for linked list
struct Node {
    int data;
    struct Node* next;
};

// Function to insert a new node at the beginning of a linked list
void push(struct Node** head_ref, int new_data) {
    struct Node* new_node = (struct Node*)malloc(sizeof(struct Node));
    new_node->data = new_data;
    new_node->next = (*head_ref);
    (*head_ref) = new_node;
}

// Function to merge two sorted linked lists into a new sorted linked list
struct Node* merge(struct Node* first, struct Node* second) {
    struct Node* merged = NULL;

    // Base cases
    if (first == NULL) return second;
    else if (second == NULL) return first;

    // Pick either the first or second node
    if (first->data <= second->data) {
        merged = first;
        merged->next = merge(first->next, second);
    } else {
        merged = second;
        merged->next = merge(first, second->next);
    }

    return merged;
}

// Function to print a linked list
void printList(struct Node* node) {
    while (node != NULL) {
        printf("%d -> ", node->data);
        node = node->next;
    }
    printf("NULL\n");
}

int main() {
    // Create the first linked list: 1 -> 2 -> 3 -> 4 -> NULL
    struct Node* first = NULL;
    push(&first, 4);
    push(&first, 3);
    push(&first, 2);
    push(&first, 1);
    printf("First LinkedList: ");
    printList(first);

    // Create the second linked list: 7 -> 8 -> 9 -> NULL
    struct Node* second = NULL;
    push(&second, 9);
    push(&second, 8);
    push(&second, 7);
    printf("Second LinkedList: ");
    printList(second);

    // Merge the two linked lists
    struct Node* merged = merge(first, second);
    printf("Merged LinkedList: ");
    printList(merged);

    return 0;
}
